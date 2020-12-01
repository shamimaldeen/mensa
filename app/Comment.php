<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'fastname', 'lastname', 'subject', 'post_id', 'email', 'comment'
    ];
}
