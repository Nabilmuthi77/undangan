<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Invitation;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'nama_acara' => 'required|string|max:255',
                'tanggal_acara' => 'required|date',
                'jam_mulai' => 'required',
                'jam_selesai' => 'required',
                'zona_waktu_tambah' => 'required',
                'nama_tempat' => 'required|string|max:255',
                'alamat_tempat' => 'required|string',
                'link_google_maps' => 'required|url',
            ]);

            $acara = new Acara($request->except('zona_waktu_tambah'));
            $acara->zona_waktu = $request->zona_waktu_tambah;
            $acara->invitation_id = $invitation->id;
            $acara->save();

            return redirect()->back()->with('success', 'Acara berhasil ditambahkan')->withFragment('acara');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan acara: ' . $e->getMessage())->withFragment('acara');
        }
    }

    public function update(Request $request, Acara $acara)
    {
        try {
            $request->validate([
                'nama_acara' => 'required|string|max:255',
                'tanggal_acara' => 'required|date',
                'jam_mulai' => 'required',
                'jam_selesai' => 'required',
                'zona_waktu' => 'required',
                'nama_tempat' => 'required|string|max:255',
                'alamat_tempat' => 'required|string',
                'link_google_maps' => 'required|url',
            ]);

            $acara->update($request->all());

            return redirect()->back()->with('success', 'Acara berhasil diperbarui')->withFragment('acara');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui acara: ' . $e->getMessage())->withFragment('acara');
        }
    }

    public function destroy(Acara $acara)
    {
        try {
            $acara->delete();

            return redirect()->back()->with('success', 'Acara berhasil dihapus')->withFragment('acara');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus acara: ' . $e->getMessage())->withFragment('acara');
        }
    }
}
