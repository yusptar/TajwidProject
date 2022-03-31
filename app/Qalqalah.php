<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qalqalah extends Model
{
    protected $table = 'qalqalah';
    protected $fillable = ['title', 'pembimbing', 'youtube'];
}
