<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ContactMessage;

class ContactFormController extends Controller
{
    // Fungsi untuk menangani pengiriman formulir
    public function submitForm(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // Simpan pesan ke database (optional)
        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        // Kirim pesan ke Telegram
        $this->sendToTelegram($request);

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Pesan telah dikirim!');
    }

    // Mengirimkan pesan ke Telegram
    private function sendToTelegram(Request $request)
    {
        // Mengambil Token Bot dan Chat ID dari .env
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        $message = "Pesan Kontak Baru\n\n";
        $message .= "Nama: " . $request->name . "\n";
        $message .= "Email: " . $request->email . "\n";
        $message .= "No Telp: " . $request->phone . "\n";
        $message .= "Pesan: " . $request->message;

        $url = "https://api.telegram.org/bot$botToken/sendMessage";

        // Mengirim request ke Telegram API
        $response = Http::get($url, [
            'chat_id' => $chatId,
            'text' => $message,
        ]);

        // Cek jika ada error dari API Telegram
        if ($response->failed()) {
            \Log::error('Failed to send message to Telegram: ' . $response->body());
        }
    }
}