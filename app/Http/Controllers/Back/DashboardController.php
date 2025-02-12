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
    public function program($renstraNumber) {
        return view("back.dashboard.renstra.renstra" . $renstraNumber);
    }
    
}
