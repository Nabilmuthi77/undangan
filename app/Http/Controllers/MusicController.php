<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Invitation;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function store(Request $request, $invitationId)
    {
        try {
            $request->validate([
                'music_link' => 'required|url',
            ]);

            $invitation = Invitation::findOrFail($invitationId);

            $music = Music::where('invitation_id', $invitation->id)->first();

            if ($music) {
                $music->update([
                    'file_path' => $request->music_link,
                ]);
            } else {
                Music::create([
                    'invitation_id' => $invitation->id,
                    'file_path' => $request->music_link,
                ]);
            }

            return redirect()->back()->with('success', 'Link musik berhasil disimpan')->withFragment('musik');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan link musik: ' . $e->getMessage())->withFragment('streaming');
        }
    }

    public function destroy($id)
    {
        try {
            $music = Music::findOrFail($id);

            $music->delete();

            return redirect()->back()->with('success', 'Link musik berhasil dihapus')->withFragment('musik');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus link musik: ' . $e->getMessage())->withFragment('streaming');
        }
    }
}
