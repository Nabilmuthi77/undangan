<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cerita;
use App\Models\Invitation;

class CeritaController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        $request->validate([
            'judul_cerita' => 'required|string|max:255',
            'isi_cerita' => 'required|string',
        ]);

        try {
            Cerita::create([
                'invitation_id' => $invitation->id,
                'judul_cerita' => $request->judul_cerita,
                'isi_cerita' => $request->isi_cerita,
            ]);

            return redirect()->back()->with('success', 'Cerita berhasil disimpan')->withFragment('cerita');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan cerita: ' . $e->getMessage())->withFragment('cerita');
        }
    }

    public function update(Request $request, Cerita $cerita)
    {
        $request->validate([
            'judul_cerita' => 'required|string|max:255',
            'isi_cerita' => 'required|string',
        ]);

        try {
            $cerita->update([
                'judul_cerita' => $request->judul_cerita,
                'isi_cerita' => $request->isi_cerita,
            ]);

            return redirect()->back()->with('success', 'Cerita berhasil diperbarui')->withFragment('cerita');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui cerita: ' . $e->getMessage())->withFragment('cerita');
        }
    }

    public function destroy(Cerita $cerita)
    {
        try {
            $cerita->delete();

            return redirect()->back()->with('success', 'Cerita berhasil dihapus')->withFragment('cerita');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus cerita: ' . $e->getMessage())->withFragment('cerita');
        }
    }
}
