<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Streaming extends Model
{
    use HasFactory;

    protected $table = 'streaming';
    protected $fillable = [
        'invitation_id',
        'link_streaming',
    ];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
