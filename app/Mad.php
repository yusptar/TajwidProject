<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mad extends Model
{
    protected $table = 'mad';
    protected $fillable = ['title', 'pembimbing', 'youtube'];
}
