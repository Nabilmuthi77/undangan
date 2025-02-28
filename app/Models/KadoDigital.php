<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KadoDigital extends Model
{
    use HasFactory;

    protected $table = 'kado_digital';
    protected $fillable = ['penerima', 'nama_bank', 'no_rekening', 'invitation_id'];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
