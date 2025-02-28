<?php

namespace App\Http\Controllers;

use App\Models\Rsvp;
use App\Models\Comment;
use App\Models\Feedback;
use App\Models\BugReport;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        try {
            $user = Auth::user();
            $invitation_id = $user->invitation->id ?? null;

            $commentPage = $request->input('comment_page', 1);
            $rsvpPage = $request->input('rsvp_page', 1);

            $comment = Comment::where('invitation_id', $invitation_id)->paginate(10, ['*'], 'comment_page', $commentPage);
            $commentcount = Comment::where('invitation_id', $invitation_id)->count();

            $rsvp = Rsvp::where('invitation_id', $invitation_id)->paginate(10, ['*'], 'rsvp_page', $rsvpPage);
            $rsvpcount = Rsvp::where('invitation_id', $invitation_id)->count();

            return view('user.dashboard', compact('comment', 'commentcount', 'rsvp', 'rsvpcount', 'user'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat halaman dashboard: ' . $e->getMessage());
        }
    }

    public function undangan()
    {
        try {
            $invitations = Invitation::where('user_id', Auth::id())->with(['theme', 'tamu'])->get();

            return view('user.undangan', compact('invitations'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat halaman undangan: ' . $e->getMessage());
        }
    }

    public function feedbackandbug()
    {
        try {
            $feedback = Feedback::where('user_id', Auth::id())->get();
            $bug = BugReport::where('user_id', Auth::id())->get();

            return view('user.feedback-bug', compact('feedback', 'bug'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat halaman feedback & laporan bug: ' . $e->getMessage());
        }
    }

    public function cs()
    {
        return view('user.cs');
    }
}
