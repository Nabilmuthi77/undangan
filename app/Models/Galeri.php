<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeri';
    protected $fillable = [
        'invitation_id',
        'foto_sampul',
        'foto_galeri',
        'video_galeri',
        'foto_pembuka',
        'foto_acara',
        'foto_cerita',
        'foto_penutup',
    ];

    protected $casts = [
        'foto_galeri' => 'array',
    ];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
