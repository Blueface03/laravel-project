<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ContactMessage;

class ContactFormController extends Controller
{
    // Menangani pengiriman formulir
    public function submitForm(Request $request)
    {
        // Validasi input formulir
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

    // Fungsi untuk mengirim pesan ke Telegram
    private function sendToTelegram(Request $request)
    {
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $adminChatId = env('TELEGRAM_ADMIN_CHAT_ID');  // Chat ID Admin

        $message = "Pesan Kontak Baru\n\n";
        $message .= "Nama: " . $request->name . "\n";
        $message .= "Email: " . $request->email . "\n";
        $message .= "No Telp: " . $request->phone . "\n";
        $message .= "Pesan: " . $request->message;

        $url = "https://api.telegram.org/bot$botToken/sendMessage";

        // Mengirim pesan ke Telegram
        $response = Http::get($url, [
            'chat_id' => $adminChatId,
            'text' => $message,
        ]);

        // Log error jika pengiriman gagal
        if ($response->failed()) {
            \Log::error('Failed to send message to Telegram: ' . $response->body());
        }
    }
}
