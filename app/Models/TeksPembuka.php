<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeksPembuka extends Model
{
    use HasFactory;

    protected $table = 'teks_pembuka';
    protected $fillable = ['invitation_id', 'salam', 'teks'];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
