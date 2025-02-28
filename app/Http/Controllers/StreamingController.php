<?php

namespace App\Http\Controllers;

use App\Models\Streaming;
use App\Models\Invitation;
use Illuminate\Http\Request;

class StreamingController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'link_streaming' => 'required|url',
            ], [
                'link_streaming.required' => 'Link streaming harus diisi',
                'link_streaming.url' => 'Link streaming harus berupa URL yang valid',
            ]);

            $streaming = Streaming::where('invitation_id', $invitation->id)->first();

            if ($streaming) {
                $streaming->link_streaming = $request->link_streaming;
                $streaming->save();
            } else {
                $streaming = new Streaming($request->all());
                $streaming->invitation_id = $invitation->id;
                $streaming->save();
            }

            return redirect()->back()->with('success', 'Link streaming berhasil disimpan')->withFragment('streaming');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan link streaming: ' . $e->getMessage());
        }
    }

    public function destroy(Streaming $streaming)
    {
        try {
            $streaming->delete();

            return redirect()->back()->with('success', 'Link streaming berhasil dihapus')->withFragment('streaming');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan link streaming: ' . $e->getMessage())->withFragment('streaming');
        }
    }
}
