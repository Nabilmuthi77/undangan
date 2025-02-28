<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\TeksPenutup;
use Illuminate\Http\Request;

class TeksPenutupController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        $request->validate([
            'salam' => 'required|string|max:255',
            'teks' => 'required|string',
        ]);

        try {
            $teksPenutup = TeksPenutup::where('invitation_id', $invitation->id)->first();

            if ($teksPenutup) {
                $teksPenutup->salam = $request->salam;
                $teksPenutup->teks = $request->teks;
                $teksPenutup->save();

                return redirect()->back()->with('success', 'Teks penutup berhasil diperbarui')->withFragment('tekspenutup');
            } else {
                TeksPenutup::create([
                    'salam' => $request->salam,
                    'teks' => $request->teks,
                    'invitation_id' => $invitation->id,
                ]);

                return redirect()->back()->with('success', 'Teks penutup berhasil disimpan')->withFragment('tekspenutup');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan teks penutup: ' . $e->getMessage())->withFragment('tekspenutup');
        }
    }

    public function destroy($id)
    {
        try {
            $teksPenutup = TeksPenutup::findOrFail($id);

            $teksPenutup->delete();

            return redirect()->back()->with('success', 'Teks penutup berhasil dihapus')->withFragment('tekspenutup');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus teks penutup: ' . $e->getMessage())->withFragment('tekspenutup');
        }
    }
}
