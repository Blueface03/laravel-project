<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    public function profile($profileNumber) {
        return view("back.dashboard.profil.profil" . $profileNumber);
    }

    public function aduan($aduanNumber) {
        return view("back.dashboard.aduan.aduan" . $aduanNumber);
    }
    public function infodisduk($infodisdukNumber) {
        return view("back.dashboard.infodisduk.infodisduk" . $infodisdukNumber);
    }
    public function informasi($informasiNumber) {
        return view("back.dashboard.informasi.informasi" . $informasiNumber);
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
    public function anggaran2021($anggaran2021Number)
    {
        // Tentukan nama view sesuai dengan parameter anggaran2021Number
        $viewName = "back.dashboard.anggaran2021.anggaran2021" . $anggaran2021Number;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
    public function anggaran2022($anggaran2022Number)
    {
        // Tentukan nama view sesuai dengan parameter anggaran2022Number
        $viewName = "back.dashboard.anggaran2022.anggaran2022" . $anggaran2022Number;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
    public function anggaran2023($anggaran2023Number)
    {
        // Tentukan nama view sesuai dengan parameter anggaran2023Number
        $viewName = "back.dashboard.anggaran2023.anggaran2023" . $anggaran2023Number;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
    public function anggaran2024($anggaran2024Number)
    {
        // Tentukan nama view sesuai dengan parameter anggaran2024Number
        $viewName = "back.dashboard.anggaran2024.anggaran2024" . $anggaran2024Number;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
    public function anggaran2025($anggaran2025Number)
    {
        // Tentukan nama view sesuai dengan parameter anggaran2025Number
        $viewName = "back.dashboard.anggaran2025.anggaran2025" . $anggaran2025Number;

        // Periksa apakah file view ada, jika ada tampilkan, jika tidak tampilkan error 404
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return abort(404, 'View not found');
        }
    }
}
