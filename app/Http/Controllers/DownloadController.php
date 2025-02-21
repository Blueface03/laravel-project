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
            // Mendapatkan ekstensi file
            $extension = File::extension($path);

            // Tentukan MIME type berdasarkan ekstensi file
            $mimeType = 'application/octet-stream'; // Default untuk file binary
            if ($extension === 'pdf') {
                $mimeType = 'application/pdf';
            } elseif ($extension === 'jpg' || $extension === 'jpeg') {
                $mimeType = 'image/jpeg';
            } elseif ($extension === 'png') {
                $mimeType = 'image/png';
            } elseif ($extension === 'txt') {
                $mimeType = 'text/plain';
            }

            // Mengatur header agar browser mendownload file
            return response()->download($path, $filename, [
                'Content-Type' => $mimeType,
                'Content-Disposition' => 'attachment; filename="' . $filename . '"'
            ]);
        } else {
            // Jika file tidak ditemukan, tampilkan halaman error 404
            abort(404, 'File tidak ditemukan');
        }
    }

}
