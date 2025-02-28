<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\TeksPembuka;
use Illuminate\Http\Request;

class TeksPembukaController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        $request->validate([
            'salam' => 'required|string|max:255',
            'teks' => 'required|string',
        ]);

        try {
            $teksPembuka = TeksPembuka::where('invitation_id', $invitation->id)->first();

            if ($teksPembuka) {
                $teksPembuka->salam = $request->salam;
                $teksPembuka->teks = $request->teks;
                $teksPembuka->save();

                return redirect()->back()->with('success', 'Teks pembuka berhasil diperbarui')->withFragment('tekspembuka');
            } else {
                TeksPembuka::create([
                    'salam' => $request->salam,
                    'teks' => $request->teks,
                    'invitation_id' => $invitation->id,
                ]);

                return redirect()->back()->with('success', 'Teks pembuka berhasil disimpan')->withFragment('tekspembuka');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan teks pembuka: ' . $e->getMessage())->withFragment('tekspembuka');
        }
    }

    public function destroy($id)
    {
        try {
            $teksPembuka = TeksPembuka::findOrFail($id);

            $teksPembuka->delete();

            return redirect()->back()->with('success', 'Teks pembuka berhasil dihapus')->withFragment('tekspembuka');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus teks pembuka: ' . $e->getMessage())->withFragment('tekspembuka');
        }
    }
}
