<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari nama default (plural form dari nama model)
    protected $table = 'contact_messages';

    // Tentukan kolom mana yang boleh diisi
    protected $fillable = ['name', 'email', 'phone', 'message'];
}
