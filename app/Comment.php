<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_name',
        'email',
        'home_page',
        'file',
        'message',
        'parent_id',
        'level',
        'ip',
        'browser'
    ];
}
