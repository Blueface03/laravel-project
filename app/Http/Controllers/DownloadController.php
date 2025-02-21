<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class DownloadController extends Controller
{
    /**
     * Menangani pengunduhan file.
     *
     * @param string $filename
     * @return 
     */
    public function download($filename)
{
    // Tentukan path penyimpanan file di folder 'public/back/assets/pdf/'
    $path = public_path('back/assets/pdf/' . $filename); // Sesuaikan dengan lokasi file Anda

    // Cek apakah file ada
    if (File::exists($path)) {
        // Jika file ada, beri respons untuk mendownload file
        return response()->download($path);
    } else {
        // Jika file tidak ditemukan, tampilkan halaman error 404
        abort(404, 'File tidak ditemukan');
    }
}


}
