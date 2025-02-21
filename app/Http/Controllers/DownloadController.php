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
            // Mengatur header agar browser mendownload file
            return response()->download($path, $filename, [
                'Content-Type' => 'application/pdf',  // Tipe file PDF
                'Content-Disposition' => 'attachment; filename="' . $filename . '"'
            ]);
        } else {
            // Jika file tidak ditemukan, tampilkan halaman error 404
            abort(404, 'File tidak ditemukan');
        }
    }



}
