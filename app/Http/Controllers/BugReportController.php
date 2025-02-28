<?php

namespace App\Http\Controllers;

use App\Models\BugReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BugReportController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'bug_description' => 'required|string',
                'screenshot' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $data = [
                'user_id' => Auth::id(),
                'username' => Auth::user()->username,
                'bug_description' => $request->bug_description,
            ];

            if ($request->hasFile('screenshot')) {
                $data['screenshot_path'] = $request->file('screenshot')->store('ss-bug', 'public');
            }

            BugReport::create($data);

            return redirect()->back()->with('success', 'Laporan bug berhasil dikirim');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim laporan bug: ' . $e->getMessage());
        }
    }

    public function update(Request $request, BugReport $bugReport)
    {
        try {
            $request->validate([
                'bug_description' => 'required|string',
                'screenshot' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $data = [
                'bug_description' => $request->bug_description,
            ];

            if ($request->hasFile('screenshot')) {
                if ($bugReport->screenshot_path) {
                    Storage::disk('ss_bug')->delete($bugReport->screenshot_path);
                }

                $data['screenshot_path'] = $request->file('screenshot')->store('ss-bug', 'ss_bug');
            }

            $bugReport->update($data);

            return redirect()->back()->with('success', 'Laporan bug berhasil diperbarui')->withFragment('bug');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim laporan bug: ' . $e->getMessage())->withFragment('bug');
        }
    }

    public function destroy(BugReport $bugReport)
    {
        try {
            $bugReport->delete();

            return redirect()->back()->with('success', 'Laporan bug berhasil dihapus')->withFragment('bug');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus laporan bug: ' . $e->getMessage())->withFragment('bug');
        }
    }
}
