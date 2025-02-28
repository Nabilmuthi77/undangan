<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThemeController extends Controller
{
    public function index()
    {
        try {
            $themes = Theme::all();

            return view('main', compact('themes'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat tema atau menghitung pengunjung: ' . $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'view_file' => 'required',
                'thumbnail' => 'required',
                'path' => 'required',
                'tipe' => 'required|in:Basic,Premium',
            ]);

            $slug = Str::slug($request->name);

            if (Theme::where('slug', $slug)->exists()) {
                return redirect()->back()->with(['error' => 'Slug sudah ada, silakan gunakan nama tema yang berbeda']);
            }

            Theme::create([
                'name' => $request->name,
                'view_file' => $request->view_file,
                'thumbnail' => $request->thumbnail,
                'path' => $request->path,
                'slug' => $slug,
                'tipe' => $request->tipe,
            ]);

            return redirect()->route('admin.tema')->with('success', 'Tema berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambah tema: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'id' => 'required|integer|unique:themes,id,' . $id,
                'name' => 'required',
                'view_file' => 'required',
                'thumbnail' => 'required',
                'path' => 'required',
                'tipe' => 'required|in:Basic,Premium',
            ]);

            $theme = Theme::findOrFail($id);
            $slug = Str::slug($request->name);

            if (Theme::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                return redirect()->back()->withErrors(['slug' => 'Slug sudah ada, silakan gunakan nama tema yang berbeda']);
            }

            $oldId = $theme->id;

            $theme->update([
                'id' => $request->id,
                'name' => $request->name,
                'view_file' => $request->view_file,
                'thumbnail' => $request->thumbnail,
                'path' => $request->path,
                'slug' => $slug,
                'tipe' => $request->tipe,
            ]);

            if ($oldId != $request->id) {
                DB::table('themes')->where('id', $oldId)->delete();
            }

            return redirect()->route('admin.tema')->with('success', 'Tema berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui data tema: ' . $e->getMessage());
        }
    }

    public function demo($slug)
    {
        try {
            $theme = Theme::where('slug', $slug)->firstOrFail();

            return view('demo.' . $theme->view_file);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat demo tema: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $theme = Theme::findOrFail($id);
            $theme->delete();

            return redirect()->route('admin.tema')->with('success', 'Tema berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus tema: ' . $e->getMessage());
        }
    }
}
