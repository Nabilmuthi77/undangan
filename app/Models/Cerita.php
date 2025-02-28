<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cerita extends Model
{
    use HasFactory;

    protected $table = 'cerita';
    protected $fillable = [
        'invitation_id',
        'judul_cerita',
        'isi_cerita',
    ];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
