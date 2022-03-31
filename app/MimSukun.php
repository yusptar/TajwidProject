<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MimSukun extends Model
{
    protected $table = 'mimsukun';
    protected $fillable = ['title', 'pembimbing', 'youtube'];
}
