<?php

namespace App\Http\Controllers;

use App\Models\ColorPalette; // Pastikan model ColorPalette sudah ada
use Illuminate\Http\Request;

class ColorPaletteController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel color_palettes
        $colorPalettes = ColorPalette::all();

        // Kirim data ke view 'landing.blade.php'
        return view('home', compact('colorPalettes'));
    }
}
