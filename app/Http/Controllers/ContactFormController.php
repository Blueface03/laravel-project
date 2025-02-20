<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Http;

class ContactFormController extends Controller
{
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

    private function sendToTelegram(Request $request)
    {
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        $message = "Pesan Kontak Baru\n\n";
        $message .= "Nama: " . $request->name . "\n";
        $message .= "Email: " . $request->email . "\n";
        $message .= "No Telp: " . $request->phone . "\n";
        $message .= "Pesan: " . $request->message;

        $url = "https://api.telegram.org/bot$botToken/sendMessage";

        // Mengirim request ke Telegram API
        Http::get($url, [
            'chat_id' => $chatId,
            'text' => $message,
        ]);
    }
}

