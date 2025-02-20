<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aduan;

class AduanController extends Controller
{
    public function submitAduan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'noTelp' => 'required|string',
            'alamat' => 'required|string',
            'topik' => 'required|string',
            'pesan' => 'required|string',
            'security_code' => 'required|string',
        ]);

        // Menyimpan aduan ke database
        $aduan = new Aduan();
        $aduan->nama = $validated['nama'];
        $aduan->email = $validated['email'];
        $aduan->no_telp = $validated['noTelp'];
        $aduan->alamat = $validated['alamat'];
        $aduan->topik = $validated['topik'];
        $aduan->pesan = $validated['pesan'];
        $aduan->save();

        // Mengirimkan pesan ke Telegram
        $token = '7634422842:AAEonFeiei3gf5qM9lZuppuGiS4Peg5cc-4';  // Ganti dengan token bot Telegram Anda
        $chat_id = '7643617622';  // Ganti dengan ID chat Telegram Anda

        // Format pesan untuk Telegram
        $text = "Aduan Baru:\n";
        $text .= "Nama: {$validated['nama']}\n";
        $text .= "Email: {$validated['email']}\n";
        $text .= "No. Telp: {$validated['noTelp']}\n";
        $text .= "Alamat: {$validated['alamat']}\n";
        $text .= "Topik: {$validated['topik']}\n";
        $text .= "Pesan: {$validated['pesan']}\n";

        // Kirim pesan ke bot Telegram menggunakan API
        $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text);

        // Melakukan permintaan HTTP ke API Telegram
        $response = file_get_contents($url);

        if ($response) {
            return back()->with('success', 'Aduan berhasil dikirim!');
        } else {
            return back()->with('error', 'Terjadi kesalahan dalam mengirim aduan!');
        }
    }
    public function showAduanList()
{
    $aduans = Aduan::latest()->get();  // Mendapatkan aduan terbaru
    return view('aduan.list', compact('aduans'));
}

}

