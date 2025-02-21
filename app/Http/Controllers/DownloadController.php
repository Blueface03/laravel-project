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
    // Validasi nama file
    $filename = basename($filename);

    // Tentukan path penyimpanan file
    $path = public_path('back/assets/pdf/' . $filename);

    // Cek apakah file ada
    if (File::exists($path)) {
        // Validasi ekstensi file
        $allowedExtensions = ['pdf', 'jpg', 'jpeg', 'png', 'txt'];
        $extension = File::extension($path);
        if (!in_array($extension, $allowedExtensions)) {
            abort(403, 'Ekstensi file tidak diperbolehkan');
        }

        // Cek MIME type dengan menggunakan fileinfo
        $finfo = finfo_open(FILEINFO_MIME_TYPE); 
        $mimeType = finfo_file($finfo, $path);
        finfo_close($finfo);
        if (!in_array($mimeType, ['application/pdf', 'image/jpeg', 'image/png', 'text/plain'])) {
            abort(403, 'File tidak valid');
        }

        // Cek ukuran file
        $maxFileSize = 10 * 1024 * 1024; // 10 MB
        if (File::size($path) > $maxFileSize) {
            abort(403, 'File terlalu besar untuk diunduh');
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
