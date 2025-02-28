<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Theme extends Model
{
    use HasFactory;

    protected $table = 'themes';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'view_file',
        'thumbnail',
        'tipe',
        'path',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($theme) {
            $theme->slug = Str::slug($theme->name);
        });

        static::updating(function ($theme) {
            $theme->slug = Str::slug($theme->name);
        });
    }
}
