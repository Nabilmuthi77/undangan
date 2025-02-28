<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $table = 'musics';
    protected $fillable = [
        'invitation_id',
        'file_path',
    ];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
