<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use App\Models\Acara;
use App\Models\Music;
use App\Models\Quote;
use App\Models\Theme;
use App\Models\Cerita;
use App\Models\Galeri;
use App\Models\Comment;
use App\Models\Mempelai;
use App\Models\Streaming;
use App\Models\Invitation;
use App\Models\KadoDigital;
use App\Models\TeksPembuka;
use App\Models\TeksPenutup;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class InvitationController extends Controller
{
    public function storeInvitation(Request $request)
    {
        $request->validate([
            'theme_id' => 'required|exists:themes,id',
            'title' => 'required|string|max:255',
        ]);

        $user = Auth::user();

        $existingInvitation = Invitation::where('user_id', $user->id)->first();

        if ($existingInvitation) {
            return redirect()->route('user.undangan')
                ->with('error', 'Anda hanya dapat membuat satu undangan');
        }

        try {
            Invitation::create([
                'user_id' => $user->id,
                'theme_id' => $request->theme_id,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
            ]);

            return redirect()->route('user.undangan')
                ->with('success', 'Undangan berhasil dibuat');
        } catch (\Exception $e) {
            return redirect()->route('user.undangan')->with('error', 'Terjadi kesalahan saat membuat undangan: ' . $e->getMessage());
        }
    }

    public function editInvitation(Invitation $invitation, Request $request)
    {
        try {
            $themes = Theme::all();
            $mempelai = Mempelai::where('invitation_id', $invitation->id)->first();

            $acaraPage = $request->input('acara_page', 1);
            $ceritaPage = $request->input('cerita_page', 1);
            $kadodigitalPage = $request->input('kadodigital_page', 1);
            $tamuPage = $request->input('tamu_page', 1);

            $acara = Acara::where('invitation_id', $invitation->id)->paginate(10, ['*'], 'acara_page', $acaraPage);
            $cerita = Cerita::where('invitation_id', $invitation->id)->paginate(10, ['*'], 'cerita_page', $ceritaPage);
            $kadodigital = KadoDigital::where('invitation_id', $invitation->id)->paginate(10, ['*'], 'kadodigital_page', $kadodigitalPage);
            $tamu = Tamu::where('invitation_id', $invitation->id)->paginate(10, ['*'], 'tamu_page', $tamuPage);

            $streaming = Streaming::where('invitation_id', $invitation->id)->first();
            $galeri = Galeri::where('invitation_id', $invitation->id)->first();
            $quote = Quote::where('invitation_id', $invitation->id)->first();
            $music = Music::where('invitation_id', $invitation->id)->first();
            $tekspembuka = TeksPembuka::where('invitation_id', $invitation->id)->first();
            $tekspenutup = TeksPenutup::where('invitation_id', $invitation->id)->first();

            $isPremium = $invitation->theme->tipe == 'Premium';

            return view('user.edit-invitation', compact(
                'invitation',
                'themes',
                'mempelai',
                'acara',
                'streaming',
                'galeri',
                'cerita',
                'quote',
                'kadodigital',
                'music',
                'tamu',
                'tekspembuka',
                'tekspenutup',
                'isPremium'
            ));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data undangan: ' . $e->getMessage());
        }
    }

    public function updateInvitation(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
            ]);

            $invitation->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
            ]);

            return redirect()->back()->with('success', 'Undangan berhasil diperbarui')->withFragment('tema');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui undangan: ' . $e->getMessage())->withFragment('tema');
        }
    }

    public function updateTheme(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'theme_id' => 'required|exists:themes,id',
            ]);

            $invitation->update([
                'theme_id' => $request->theme_id,
            ]);

            return redirect()->back()->with('success', 'Tema berhasil diubah')->withFragment('tema');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengganti tema: ' . $e->getMessage())->withFragment('tema');
        }
    }

    public function destroyInvitation(Invitation $invitation)
    {
        try {
            $invitation->delete();

            return redirect()->route('user.undangan')->with('success', 'Undangan berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus undangan: ' . $e->getMessage());
        }
    }

    public function demo($slug)
    {
        try {
            $theme = Theme::where('slug', $slug)->firstOrFail();
            return view('demo.' . $theme->view_file);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat demo: ' . $e->getMessage());
        }
    }

    public function show($slug)
    {
        try {
            $userId = Auth::id();

            $invitation = Invitation::with([
                'mempelai',
                'acara',
                'streaming',
                'galeri',
                'cerita',
                'quote',
                'kadodigital',
                'music',
                'tekspembuka',
                'tekspenutup'
            ])
                ->where('slug', $slug)
                ->where('user_id', $userId)
                ->firstOrFail();

            $fotoSampul = optional($invitation->galeri)->foto_sampul ?? '';
            $fotoPembuka = optional($invitation->galeri)->foto_pembuka ?? 'tema/foto/default.png';
            $fotoAcara = optional($invitation->galeri)->foto_acara ?? 'tema/foto/default.png';
            $fotoCerita = optional($invitation->galeri)->foto_cerita ?? 'tema/foto/default.png';

            $theme = Theme::findOrFail($invitation->theme_id);

            $acara = $invitation->acara->first();
            $tanggalAcara = $acara ? $acara->tanggal_acara : null;

            $comments = Comment::where('invitation_id', $invitation->id)
                ->where('active', true)
                ->latest()
                ->get();

            return view('tema.' . $theme->view_file, [
                'invitation' => $invitation,
                'theme' => $theme,
                'tanggalAcara' => $tanggalAcara,
                'cerita' => $invitation->cerita,
                'comments' => $comments,
                'commentsEnabled' => $invitation->comments_enabled,
                'fotoSampul' => $fotoSampul,
                'fotoPembuka' => $fotoPembuka,
                'fotoAcara' => $fotoAcara,
                'fotoCerita' => $fotoCerita,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Undangan tidak ditemukan atau Anda tidak memiliki akses.');
        }
    }

    public function showForGuest($hashedUserId, $slug, $guestName)
    {
        try {
            $invitations = Invitation::with([
                'mempelai',
                'acara',
                'streaming',
                'galeri',
                'cerita',
                'quote',
                'kadodigital',
                'music',
                'tekspembuka',
                'tekspenutup'
            ])->where('slug', $slug)->get();

            $matchedInvitation = null;

            foreach ($invitations as $invitation) {
                if (md5($invitation->user_id) === $hashedUserId) {
                    $matchedInvitation = $invitation;
                    break;
                }
            }

            if (!$matchedInvitation) {
                abort(404);
            }

            $guestData = Tamu::where('nama_tamu', $guestName)->first();

            $fotoSampul = optional($matchedInvitation->galeri)->foto_sampul ?? '';
            $fotoPembuka = optional($matchedInvitation->galeri)->foto_pembuka ?? 'tema/foto/default.png';
            $fotoAcara = optional($matchedInvitation->galeri)->foto_acara ?? 'tema/foto/default.png';
            $fotoCerita = optional($matchedInvitation->galeri)->foto_cerita ?? 'tema/foto/default.png';

            $theme = Theme::findOrFail($matchedInvitation->theme_id);

            $comments = Comment::where('invitation_id', $matchedInvitation->id)
                ->where('active', true)
                ->latest()
                ->get();

            $acara = $matchedInvitation->acara->first();
            $tanggalAcara = $acara ? $acara->tanggal_acara : null;

            return view('tema.' . $theme->view_file, [
                'invitation' => $matchedInvitation,
                'theme' => $theme,
                'tanggalAcara' => $tanggalAcara,
                'cerita' => $matchedInvitation->cerita,
                'comments' => $comments,
                'commentsEnabled' => $matchedInvitation->comments_enabled,
                'guestData' => $guestData,
                'fotoSampul' => $fotoSampul,
                'fotoPembuka' => $fotoPembuka,
                'fotoAcara' => $fotoAcara,
                'fotoCerita' => $fotoCerita,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Undangan tidak ditemukan atau terjadi kesalahan.');
        }
    }
}
