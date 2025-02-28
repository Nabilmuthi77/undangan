<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    use HasFactory;

    protected $table = 'rsvp';
    protected $fillable = [
        'nama',
        'pesan',
        'konfirmasi_kehadiran',
        'invitation_id',
    ];

    public function undangan()
    {
        return $this->belongsTo(Invitation::class);
    }
}
