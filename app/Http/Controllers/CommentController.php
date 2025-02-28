<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Invitation;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            Comment::create([
                'invitation_id' => $invitation->id,
                'name' => $request->name,
                'message' => $request->message,
                'active' => true,
            ]);

            return redirect()->back()->with('success', 'Ucapan & Doa berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambah Ucapan & Doa: ' . $e->getMessage())->withFragment('streaming');
        }
    }

    public function toggleStatus(Invitation $invitation)
    {
        try {
            $invitation->comments_enabled = !$invitation->comments_enabled;
            $invitation->save();

            return redirect()->back()->with('success', 'Status Ucapan & Doa berhasil diubah')->withFragment('ucapan-doa');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengubah status Ucapan & Doa: ' . $e->getMessage())->withFragment('streaming');
        }
    }

    public function destroy(Comment $comment)
    {
        try {
            $comment->delete();

            return redirect()->back()->with('success', 'Ucapan & Doa berhasil dihapus')->withFragment('ucapan-doa');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus Ucapan & Doa: ' . $e->getMessage())->withFragment('streaming');
        }
    }
}
