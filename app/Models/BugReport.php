<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BugReport extends Model
{
    use HasFactory;

    protected $table = 'bug_reports';
    protected $fillable = [
        'user_id',
        'username',
        'bug_description',
        'screenshot_path',
        'admin_response',
    ];
}
