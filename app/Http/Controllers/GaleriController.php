<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Invitation;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'foto_sampul' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $foto_sampul_name = time() . '_' . $request->file('foto_sampul')->getClientOriginalName();
            $foto_sampul_path = public_path('storage/photos/' . $foto_sampul_name);

            $request->file('foto_sampul')->move(public_path('storage/photos'), $foto_sampul_name);

            $galeri = Galeri::where('invitation_id', $invitation->id)->first();

            if ($galeri) {
                if (file_exists($galeri->foto_sampul)) {
                    unlink($galeri->foto_sampul);
                }
                $galeri->update(['foto_sampul' => 'storage/photos/' . $foto_sampul_name]);
            } else {
                Galeri::create([
                    'invitation_id' => $invitation->id,
                    'foto_sampul' => 'storage/photos/' . $foto_sampul_name,
                    'foto_galeri' => json_encode([]),
                ]);
            }

            return redirect()->route('user.invitation.edit', $invitation->id)
                ->with('success', 'Foto sampul berhasil disimpan')->withFragment('foto-sampul');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan foto sampul: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function storeMultiple(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'foto_galeri.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'foto_galeri' => 'array|max:6',
            ], [
                'foto_galeri.max' => 'Anda hanya bisa mengunggah maksimal 6 foto',
            ]);

            $foto_galeri_paths = [];

            $galeri = Galeri::where('invitation_id', $invitation->id)->first();

            if (!$galeri) {
                $galeri = Galeri::create([
                    'invitation_id' => $invitation->id,
                    'foto_galeri' => json_encode([]),
                ]);
            }

            $existingPhotos = json_decode($galeri->foto_galeri, true);
            $totalPhotos = count($existingPhotos);

            if ($totalPhotos >= 6) {
                return redirect()->back()->with('error', 'Anda sudah mengunggah 6 foto, tidak bisa menambahkan lebih banyak lagi')->withFragment('foto-galeri');
            }

            foreach ($request->file('foto_galeri') as $foto) {
                if (count($foto_galeri_paths) + $totalPhotos >= 6) {
                    return redirect()->back()->with('error', 'Anda hanya bisa mengunggah maksimal 6 foto')->withFragment('foto-galeri');
                }

                $fotoName = time() . '_' . $foto->getClientOriginalName();
                $foto->move(public_path('storage/photos'), $fotoName);
                $foto_galeri_paths[] = 'storage/photos/' . $fotoName;
            }

            $updatedFotoGaleri = array_merge($existingPhotos, $foto_galeri_paths);

            $galeri->update(['foto_galeri' => json_encode($updatedFotoGaleri)]);

            return redirect()->route('user.invitation.edit', $invitation->id)
                ->with('success', 'Foto galeri berhasil disimpan')->withFragment('foto-galeri');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan foto galeri: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function storeVideo(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'video_galeri' => 'required|url',
            ]);

            $galeri = Galeri::where('invitation_id', $invitation->id)->first();

            if ($galeri) {
                $galeri->update(['video_galeri' => $request->input('video_galeri')]);
            } else {
                Galeri::create([
                    'invitation_id' => $invitation->id,
                    'video_galeri' => $request->input('video_galeri'),
                    'foto_galeri' => json_encode([]),
                ]);
            }

            return redirect()->route('user.invitation.edit', $invitation->id)
                ->with('success', 'Video galeri berhasil disimpan.')->withFragment('video');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan video galeri: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function storeFotoPembuka(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'foto_pembuka' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $foto_pembuka_name = time() . '_' . $request->file('foto_pembuka')->getClientOriginalName();
            $foto_pembuka_path = public_path('storage/photos/' . $foto_pembuka_name);
            $request->file('foto_pembuka')->move(public_path('storage/photos'), $foto_pembuka_name);

            $galeri = Galeri::where('invitation_id', $invitation->id)->first();
            if ($galeri) {
                if (file_exists($galeri->foto_pembuka)) {
                    unlink($galeri->foto_pembuka);
                }
                $galeri->update(['foto_pembuka' => 'storage/photos/' . $foto_pembuka_name]);
            } else {
                Galeri::create([
                    'invitation_id' => $invitation->id,
                    'foto_pembuka' => 'storage/photos/' . $foto_pembuka_name,
                    'foto_galeri' => json_encode([]),
                ]);
            }

            return redirect()->route('user.invitation.edit', $invitation->id)
                ->with('success', 'Foto pembuka berhasil disimpan')->withFragment('foto-pembuka');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan foto pembuka: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function storeFotoAcara(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'foto_acara' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $foto_acara_name = time() . '_' . $request->file('foto_acara')->getClientOriginalName();
            $foto_acara_path = public_path('storage/photos/' . $foto_acara_name);
            $request->file('foto_acara')->move(public_path('storage/photos'), $foto_acara_name);

            $galeri = Galeri::where('invitation_id', $invitation->id)->first();
            if ($galeri) {
                if (file_exists($galeri->foto_acara)) {
                    unlink($galeri->foto_acara);
                }
                $galeri->update(['foto_acara' => 'storage/photos/' . $foto_acara_name]);
            } else {
                Galeri::create([
                    'invitation_id' => $invitation->id,
                    'foto_acara' => 'storage/photos/' . $foto_acara_name,
                    'foto_galeri' => json_encode([]),
                ]);
            }

            return redirect()->route('user.invitation.edit', $invitation->id)
                ->with('success', 'Foto acara berhasil disimpan')->withFragment('foto-acara');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan foto acara: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function storeFotoCerita(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'foto_cerita' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $foto_cerita_name = time() . '_' . $request->file('foto_cerita')->getClientOriginalName();
            $foto_cerita_path = public_path('storage/photos/' . $foto_cerita_name);
            $request->file('foto_cerita')->move(public_path('storage/photos'), $foto_cerita_name);

            $galeri = Galeri::where('invitation_id', $invitation->id)->first();
            if ($galeri) {
                if (file_exists($galeri->foto_cerita)) {
                    unlink($galeri->foto_cerita);
                }
                $galeri->update(['foto_cerita' => 'storage/photos/' . $foto_cerita_name]);
            } else {
                Galeri::create([
                    'invitation_id' => $invitation->id,
                    'foto_cerita' => 'storage/photos/' . $foto_cerita_name,
                    'foto_galeri' => json_encode([]),
                ]);
            }

            return redirect()->route('user.invitation.edit', $invitation->id)
                ->with('success', 'Foto cerita berhasil disimpan')->withFragment('foto-cerita');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan foto cerita: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function storeFotoPenutup(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'foto_penutup' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $foto_penutup_name = time() . '_' . $request->file('foto_penutup')->getClientOriginalName();
            $foto_penutup_path = public_path('storage/photos/' . $foto_penutup_name);
            $request->file('foto_penutup')->move(public_path('storage/photos'), $foto_penutup_name);

            $galeri = Galeri::where('invitation_id', $invitation->id)->first();
            if ($galeri) {
                if (file_exists($galeri->foto_penutup)) {
                    unlink($galeri->foto_penutup);
                }
                $galeri->update(['foto_penutup' => 'storage/photos/' . $foto_penutup_name]);
            } else {
                Galeri::create([
                    'invitation_id' => $invitation->id,
                    'foto_penutup' => 'storage/photos/' . $foto_penutup_name,
                    'foto_galeri' => json_encode([]),
                ]);
            }

            return redirect()->route('user.invitation.edit', $invitation->id)
                ->with('success', 'Foto penutup berhasil disimpan')->withFragment('foto-penutup');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan foto penutup: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function destroyCoverPhoto(Galeri $galeri)
    {
        try {
            if (!$galeri) {
                return redirect()->back()->with('error', 'Galeri tidak ditemukan!');
            }

            if ($galeri->foto_sampul && file_exists(public_path($galeri->foto_sampul))) {
                unlink(public_path($galeri->foto_sampul));
            }

            $galeri->update(['foto_sampul' => null]);

            return redirect()->back()->with('success', 'Foto sampul berhasil dihapus')->withFragment('foto-sampul');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus foto sampul: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function destroyGalleryPhoto(Request $request, Galeri $galeri)
    {
        try {
            if (!$galeri) {
                return redirect()->back()->with('error', 'Galeri tidak ditemukan!');
            }

            $index = $request->input('index');
            $foto_galeri = json_decode($galeri->foto_galeri);

            if (isset($foto_galeri[$index])) {
                if (file_exists($foto_galeri[$index])) {
                    unlink($foto_galeri[$index]);
                }

                unset($foto_galeri[$index]);
                $galeri->update(['foto_galeri' => json_encode(array_values($foto_galeri))]);

                return redirect()->back()->with('success', 'Foto galeri berhasil dihapus')->withFragment('foto-galeri');
            }

            return redirect()->back()->with('error', 'Foto galeri tidak ditemukan!')->withFragment('foto-video');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus foto galeri: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function destroyVideo(Galeri $galeri)
    {
        try {
            if (!$galeri) {
                return redirect()->back()->with('error', 'Galeri tidak ditemukan!');
            }

            if (file_exists(public_path($galeri->video_galeri))) {
                unlink(public_path($galeri->video_galeri));
            }

            $galeri->update(['video_galeri' => null]);

            return redirect()->back()->with('success', 'Video galeri berhasil dihapus')->withFragment('video');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus video galeri: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function destroyFotoPembuka(Galeri $galeri)
    {
        try {
            if (!$galeri) {
                return redirect()->back()->with('error', 'Galeri tidak ditemukan!');
            }

            if ($galeri->foto_pembuka && file_exists(public_path($galeri->foto_pembuka))) {
                unlink(public_path($galeri->foto_pembuka));
            }

            $galeri->update(['foto_pembuka' => null]);

            return redirect()->back()->with('success', 'Foto pembuka berhasil dihapus')->withFragment('foto-pembuka');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus foto pembuka: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function destroyFotoAcara(Galeri $galeri)
    {
        try {
            if (!$galeri) {
                return redirect()->back()->with('error', 'Galeri tidak ditemukan!');
            }

            if ($galeri->foto_acara && file_exists(public_path($galeri->foto_acara))) {
                unlink(public_path($galeri->foto_acara));
            }

            $galeri->update(['foto_acara' => null]);

            return redirect()->back()->with('success', 'Foto acara berhasil dihapus')->withFragment('foto-acara');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus foto acara: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function destroyFotoCerita(Galeri $galeri)
    {
        try {
            if (!$galeri) {
                return redirect()->back()->with('error', 'Galeri tidak ditemukan!');
            }

            if ($galeri->foto_cerita && file_exists(public_path($galeri->foto_cerita))) {
                unlink(public_path($galeri->foto_cerita));
            }

            $galeri->update(['foto_cerita' => null]);

            return redirect()->back()->with('success', 'Foto cerita berhasil dihapus')->withFragment('foto-cerita');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus foto cerita: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function destroyFotoPenutup(Galeri $galeri)
    {
        try {
            if (!$galeri) {
                return redirect()->back()->with('error', 'Galeri tidak ditemukan!');
            }

            if ($galeri->foto_penutup && file_exists(public_path($galeri->foto_penutup))) {
                unlink(public_path($galeri->foto_penutup));
            }

            $galeri->update(['foto_penutup' => null]);

            return redirect()->back()->with('success', 'Foto penutup berhasil dihapus')->withFragment('foto-penutup');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus foto penutup: ' . $e->getMessage())->withFragment('foto-video');
        }
    }
}
