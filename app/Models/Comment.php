<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = ['invitation_id', 'name', 'message', 'active', 'comments_enabled'];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
