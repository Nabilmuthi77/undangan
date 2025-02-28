<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mempelai extends Model
{
    use HasFactory;

    protected $table = 'mempelai';
    protected $fillable = [
        'invitation_id',
        'panggilan_pria',
        'panggilan_wanita',
        'nama_pria',
        'nama_wanita',
        'ayah_pria',
        'ibu_pria',
        'anak_ke_pria',
        'foto_pria',
        'ayah_wanita',
        'ibu_wanita',
        'anak_ke_wanita',
        'foto_wanita',
        'instagram_link_pria',
        'instagram_link_wanita',
    ];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
