<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
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

            return view('main', compact('themes', 'query'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat tema atau menghitung pengunjung: ' . $e->getMessage());
        }
    }

    public function tutorial()
    {
        return view('tutorial');
    }
}
