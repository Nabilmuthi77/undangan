<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'feedback' => 'required|string',
            ]);

            Feedback::create([
                'user_id' => Auth::id(),
                'username' => Auth::user()->username,
                'feedback' => $request->feedback,
            ]);
            return redirect()->back()->with('success', 'Feedback berhasil dikirim');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim feedback: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $feedback = Feedback::findOrFail($id);

            $request->validate([
                'feedback' => 'required|string',
            ]);

            $feedback->update(['feedback' => $request->feedback]);

            return redirect()->back()->with('success', 'Feedback berhasil diubah')->withFragment('feedback');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengubah feedback: ' . $e->getMessage())->withFragment('feedback');
        }
    }

    public function destroy($id)
    {
        try {
            $feedback = Feedback::findOrFail($id);
            $feedback->delete();

            return redirect()->back()->with('success', 'Feedback berhasil dihapus')->withFragment('feedback');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengapus feedback: ' . $e->getMessage())->withFragment('feedback');
        }
    }
}
