<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Invitation;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'quote' => 'required|string',
        ]);

        try {
            $quote = Quote::where('invitation_id', $invitation->id)->first();

            if ($quote) {
                $quote->author = $request->author;
                $quote->quote = $request->quote;
                $quote->save();

                return redirect()->back()->with('success', 'Quote berhasil diperbarui')->withFragment('quote');
            } else {
                Quote::create([
                    'author' => $request->author,
                    'quote' => $request->quote,
                    'invitation_id' => $invitation->id,
                ]);

                return redirect()->back()->with('success', 'Quote berhasil disimpan')->withFragment('quote');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan quote: ' . $e->getMessage())->withFragment('quote');
        }
    }

    public function destroy($id)
    {
        try {
            $quote = Quote::findOrFail($id);
            $quote->delete();

            return redirect()->back()->with('success', 'Quote berhasil dihapus')->withFragment('quote');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus quote: ' . $e->getMessage())->withFragment('quote');
        }
    }
}
