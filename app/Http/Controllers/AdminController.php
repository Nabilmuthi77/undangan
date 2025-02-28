<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Theme;
use App\Models\Feedback;
use App\Models\BugReport;
use App\Models\Invitation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        try {
            $invitationcount = Invitation::count();
            $usercount = User::where('role', 'user')->count();

            $userQuery = $request->input('query-pengguna');
            $invitationQuery = $request->input('query-undangan');

            $users = User::where('role', 'user')
                ->when($userQuery, function ($q) use ($userQuery) {
                    $q->where('id', $userQuery)
                        ->orWhere('username', 'like', "%{$userQuery}%")
                        ->orWhereDate('created_at', $userQuery);
                })
                ->paginate(10, ['*'], 'users_page');

            $invitations = Invitation::when($invitationQuery, function ($q) use ($invitationQuery) {
                $q->where('user_id', $invitationQuery)
                    ->orWhere('title', 'like', "%{$invitationQuery}%")
                    ->orWhereDate('created_at', $invitationQuery);
            })
                ->paginate(10, ['*'], 'invitations_page');

            $noUserResults = $userQuery && $users->isEmpty();
            $noInvitationResults = $invitationQuery && $invitations->isEmpty();

            return view('admin.dashboard', compact('invitationcount', 'usercount', 'users', 'invitations', 'noUserResults', 'noInvitationResults'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat halaman dashboard: ' . $e->getMessage());
        }
    }

    public function updateUser(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);

            $validatedData = $request->validate([
                'username' => 'nullable|unique:users,username,' . $user->id,
                'tipe_akun' => 'nullable|in:Basic,Premium',
                'password' => 'nullable',
            ]);

            if ($request->has('username')) {
                $user->username = $validatedData['username'];
            }

            if ($request->has('tipe_akun')) {
                $user->tipe_akun = $validatedData['tipe_akun'];
            }

            if ($request->has('password') && $validatedData['password'] != '') {
                $user->password = bcrypt($validatedData['password']);
            }

            $user->save();

            return redirect()->route('admin.dashboard')->with('success', 'Data pengguna berhasil diperbarui')->withFragment('pengguna');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengupdate data pengguna: ' . $e->getMessage())->withFragment('pengguna');
        }
    }

    public function deleteUser($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return redirect()->route('admin.dashboard')->with('success', 'Pengguna berhasil dihapus')->withFragment('pengguna');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus pengguna: ' . $e->getMessage())->withFragment('pengguna');
        }
    }

    public function updateinvitation(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
            ]);

            $invitation = Invitation::findOrFail($id);

            $invitation->title = $validatedData['title'];

            $invitation->save();

            return redirect()->route('admin.dashboard')->with('success', 'Undangan berhasil diperbarui')->withFragment('undangan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui undangan: ' . $e->getMessage())->withFragment('undangan');
        }
    }

    public function deleteInvitation($id)
    {
        try {
            $invitation = Invitation::findOrFail($id);

            $invitation->delete();

            return redirect()->route('admin.dashboard')->with('success', 'Undangan berhasil dihapus')->withFragment('undangan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus undangan: ' . $e->getMessage())->withFragment('undangan');
        }
    }

    public function tema(Request $request)
    {
        try {
            $query = $request->input('query');

            if ($query) {
                $themes = Theme::where('name', 'LIKE', '%' . $query . '%')
                    ->orWhere('tipe', 'LIKE', '%' . $query . '%')
                    ->get();
            } else {
                $themes = Theme::all();
            }

            return view('admin.tema', compact('themes', 'query'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat halaman tema: ' . $e->getMessage());
        }
    }

    public function feedbackandbug(Request $request)
    {
        try {
            $feedbackPage = $request->input('feedback_page', 1);
            $bugPage = $request->input('bug_page', 1);

            $feedback = Feedback::paginate(10, ['*'], 'feedback_page', $feedbackPage);
            $bug = BugReport::paginate(10, ['*'], 'bug_page', $bugPage);

            return view('admin.feedback-bug', compact('feedback', 'bug'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat halaman feedback & laporan bug: ' . $e->getMessage());
        }
    }

    public function updateBugResponse(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'admin_response' => 'required|string|max:1000',
            ]);

            $bugReport = BugReport::findOrFail($id);

            $isUpdatingOldResponse = !empty($bugReport->admin_response);

            $bugReport->admin_response = $validatedData['admin_response'];
            $bugReport->save();

            $message = $isUpdatingOldResponse
                ? 'Respon lama berhasil diperbarui!'
                : 'Respon baru berhasil disimpan!';

            return redirect()->back()
                ->with('success', $message)
                ->withFragment('bug');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan respon: ' . $e->getMessage());
        }
    }

    public function destroyBug($id)
    {
        try {
            $bugReport = BugReport::findOrFail($id);

            $bugReport->delete();

            return redirect()->back()->with('success', 'Laporan bug berhasil dihapus')->withFragment('bug');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menghaus laporan bug: ' . $e->getMessage());
        }
    }

    public function destroyFeedback($id)
    {
        try {
            $feedback = Feedback::findOrFail($id);

            $feedback->delete();

            return redirect()->back()->with('success', 'Feedback berhasil dihapus')->withFragment('feedback');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menghapus feedback: ' . $e->getMessage());
        }
    }
}
