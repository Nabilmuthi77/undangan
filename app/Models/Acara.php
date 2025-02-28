<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $table = 'acara';
    protected $fillable = [
        'invitation_id',
        'nama_acara',
        'tanggal_acara',
        'jam_mulai',
        'jam_selesai',
        'zona_waktu',
        'nama_tempat',
        'alamat_tempat',
        'link_google_maps',
    ];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
