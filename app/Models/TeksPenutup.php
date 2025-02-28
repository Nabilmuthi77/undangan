<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeksPenutup extends Model
{
    use HasFactory;

    protected $table = 'teks_penutup';
    protected $fillable = ['invitation_id', 'salam', 'teks'];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
