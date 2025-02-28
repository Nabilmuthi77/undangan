<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $table = 'invitations';
    protected $fillable = [
        'user_id',
        'theme_id',
        'title',
        'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function mempelai()
    {
        return $this->hasOne(Mempelai::class);
    }

    public function acara()
    {
        return $this->hasMany(Acara::class);
    }

    public function streaming()
    {
        return $this->hasOne(Streaming::class);
    }

    public function galeri()
    {
        return $this->hasOne(Galeri::class);
    }

    public function cerita()
    {
        return $this->hasMany(Cerita::class);
    }

    public function quote()
    {
        return $this->hasOne(Quote::class);
    }

    public function kadodigital()
    {
        return $this->hasMany(KadoDigital::class);
    }

    public function music()
    {
        return $this->hasOne(Music::class);
    }

    public function tamu()
    {
        return $this->hasMany(Tamu::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function rsvp()
    {
        return $this->hasMany(Rsvp::class);
    }

    public function tekspembuka()
    {
        return $this->hasOne(TeksPembuka::class);
    }

    public function tekspenutup()
    {
        return $this->hasOne(TeksPenutup::class);
    }
}
