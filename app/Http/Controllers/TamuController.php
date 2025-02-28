<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use App\Models\Invitation;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        try {
            $request->validate(['nama_tamu' => 'required|string|max:255']);

            Tamu::create([
                'nama_tamu' => $request->nama_tamu,
                'invitation_id' => $invitation->id,
            ]);

            return back()->with('success', 'Tamu berhasil ditambahkan')->withFragment('tamu');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambah tamu: ' . $e->getMessage());
        }
    }

    public function update(Request $request, Tamu $tamu)
    {
        try {
            $request->validate(['nama_tamu' => 'required|string|max:255']);

            $tamu->update(['nama_tamu' => $request->nama_tamu]);

            return back()->with('success', 'Tamu berhasil diperbarui')->withFragment('tamu');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui data tamu: ' . $e->getMessage());
        }
    }

    public function destroy(Tamu $tamu)
    {
        try {
            $tamu->delete();

            return back()->with('success', 'Tamu berhasil dihapus')->withFragment('tamu');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus tamu: ' . $e->getMessage());
        }
    }
}
