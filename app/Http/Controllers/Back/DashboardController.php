<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class DashboardController extends Controller
{
    public function index()
    {
        return view('back.dashboard.index');
    }
    public function inovasi()
    {
        return view('back.dashboard.inovasi');
    }
    public function galeri()
    {
        return view('back.dashboard.galeri');
    }
    public function kontak()
    {
        return view('back.dashboard.kontak');
    }
    public function kebijakan()
    {
        return view('back.dashboard.kebijakan');
    }
    public function profile($profileNumber)
    {
        return view("back.dashboard.profil.profil" . $profileNumber);
    }

    public function aduan($aduanNumber)
    {
        return view("back.dashboard.aduan.aduan" . $aduanNumber);
    }
    public function infodisduk($infodisdukNumber)
    {
        return view("back.dashboard.infodisduk.infodisduk" . $infodisdukNumber);
    }

    /* informasi */
    public function informasi($informasiNumber)
    {
        return view("back.dashboard.informasi.informasi" . $informasiNumber);
    }
    public function alurlayanan($alurlayananNumber)
    {
        // Tentukan nama view sesuai dengan parameter alurlayananNumber
        $viewName = "back.dashboard.alurlayanan.alurlayanan" . $alurlayananNumber;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
    public function ppid($ppidNumber)
    {
        // Tentukan nama view sesuai dengan parameter ppidNumber
        $viewName = "back.dashboard.ppid.ppid" . $ppidNumber;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
    public function produkhukum($produkhukumNumber)
    {
        // Tentukan nama view sesuai dengan parameter produkhukumNumber
        $viewName = "back.dashboard.produkhukum.produkhukum" . $produkhukumNumber;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }


    /* program kegiatan */
    public function renstra($renstraNumber)
    {
        // Tentukan nama view sesuai dengan parameter renstraNumber
        $viewName = "back.dashboard.renstra.renstra" . $renstraNumber;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
    public function renja($renjaNumber)
    {
        // Tentukan nama view sesuai dengan parameter renjaNumber
        $viewName = "back.dashboard.renja.renja" . $renjaNumber;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
    public function anggaran2021($anggaran2021_Number)
    {
        // Tentukan nama view sesuai dengan parameter anggaran2021Number
        $viewName = "back.dashboard.anggaran2021.anggaran2021_" . $anggaran2021_Number;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
    public function anggaran2022($anggaran2022_Number)
    {
        // Tentukan nama view sesuai dengan parameter anggaran2022Number
        $viewName = "back.dashboard.anggaran2022.anggaran2022_" . $anggaran2022_Number;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
    public function anggaran2023($anggaran2023_Number)
    {
        // Tentukan nama view sesuai dengan parameter anggaran2023Number
        $viewName = "back.dashboard.anggaran2023.anggaran2023_" . $anggaran2023_Number;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
    public function anggaran2024($anggaran2024_Number)
    {
        // Tentukan nama view sesuai dengan parameter anggaran2024Number
        $viewName = "back.dashboard.anggaran2024.anggaran2024_" . $anggaran2024_Number;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
    public function anggaran2025($anggaran2025_Number)
    {
        // Tentukan nama view sesuai dengan parameter anggaran2025Number
        $viewName = "back.dashboard.anggaran2025.anggaran2025_" . $anggaran2025_Number;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }

    public function download($filename)
    {
        // Menentukan path file PDF
        $filePath = public_path('back/assets/pdf/' . $filename);

        // Memeriksa apakah file ada
        if (File::exists($filePath)) {
            return response()->download($filePath);
        }

        // Jika file tidak ditemukan
        return abort(404, 'File not found.');
    }

}


