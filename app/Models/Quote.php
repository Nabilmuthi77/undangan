<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'quotes';
    protected $fillable = [
        'invitation_id',
        'author',
        'quote',
    ];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
