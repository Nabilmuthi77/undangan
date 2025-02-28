<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Mempelai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MempelaiController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        $request->validate([
            'panggilan_pria' => 'required|string|max:255',
            'nama_pria' => 'required|string|max:255',
            'ayah_pria' => 'nullable|string|max:255',
            'ibu_pria' => 'nullable|string|max:255',
            'anak_ke_pria' => 'nullable|string|max:255',
            'panggilan_wanita' => 'required|string|max:255',
            'nama_wanita' => 'required|string|max:255',
            'ayah_wanita' => 'nullable|string|max:255',
            'ibu_wanita' => 'nullable|string|max:255',
            'anak_ke_wanita' => 'nullable|string|max:255',
            'foto_pria' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'foto_wanita' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'instagram_link_pria' => 'nullable|string|max:255',
            'instagram_link_wanita' => 'nullable|string|max:255',
        ]);

        $data = [
            'panggilan_pria' => $request->panggilan_pria,
            'nama_pria' => $request->nama_pria,
            'nama_wanita' => $request->nama_wanita,
            'panggilan_wanita' => $request->panggilan_wanita,
            'ayah_pria' => $request->ayah_pria,
            'ibu_pria' => $request->ibu_pria,
            'anak_ke_pria' => $request->anak_ke_pria,
            'instagram_link_pria' => $request->instagram_link_pria,
            'ayah_wanita' => $request->ayah_wanita,
            'ibu_wanita' => $request->ibu_wanita,
            'anak_ke_wanita' => $request->anak_ke_wanita,
            'instagram_link_wanita' => $request->instagram_link_wanita,
        ];

        $mempelai = Mempelai::where('invitation_id', $invitation->id)->first();

        try {
            if ($request->hasFile('foto_pria')) {
                $fileName = time() . '_foto_pria.' . $request->foto_pria->extension();
                $filePath = $request->file('foto_pria')->storeAs('photos', $fileName, 'public');
                $data['foto_pria'] = 'storage/photos/' . $fileName;
            } elseif ($mempelai && $mempelai->foto_pria) {
                $data['foto_pria'] = $mempelai->foto_pria;
            }

            if ($request->hasFile('foto_wanita')) {
                $fileName = time() . '_foto_wanita.' . $request->foto_wanita->extension();
                $filePath = $request->file('foto_wanita')->storeAs('photos', $fileName, 'public');
                $data['foto_wanita'] = 'storage/photos/' . $fileName;
            } elseif ($mempelai && $mempelai->foto_wanita) {
                $data['foto_wanita'] = $mempelai->foto_wanita;
            }

            if ($mempelai) {
                $mempelai->update($data);
                return redirect()->route('user.invitation.edit', $invitation)
                    ->with('success', 'Data mempelai berhasil diperbarui')
                    ->withFragment('pengantin');
            } else {
                Mempelai::create(array_merge($data, ['invitation_id' => $invitation->id]));
                return redirect()->route('user.invitation.edit', $invitation)
                    ->with('success', 'Data mempelai berhasil ditambahkan')
                    ->withFragment('pengantin');
            }
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data mempelai: ' . $e->getMessage())
                ->withFragment('pengantin');
        }
    }
}
