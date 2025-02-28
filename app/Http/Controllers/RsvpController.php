<?php

namespace App\Http\Controllers;

use App\Models\Rsvp;
use Illuminate\Http\Request;

class RsvpController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'nama' => 'required|string|max:255',
                'pesan' => 'nullable|string',
                'konfirmasi_kehadiran' => 'required|in:1,2,3',
                'invitation_id' => 'required|exists:invitations,id',
            ]);

            Rsvp::create([
                'nama' => $validated['nama'],
                'pesan' => $validated['pesan'],
                'konfirmasi_kehadiran' => $validated['konfirmasi_kehadiran'],
                'invitation_id' => $validated['invitation_id'],
            ]);

            return redirect()->back()->with('success', 'RSVP berhasil disimpan');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->with('error', 'Konfirmasi kehadiran wajib diisi');
        }
    }

    public function destroy(Rsvp $rsvp)
    {
        try {
            $rsvp->delete();

            return redirect()->back()->with('success', 'RSVP berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus RSVP: ' . $e->getMessage())->withFragment('streaming');
        }
    }
}
