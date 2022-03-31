<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NunSukun extends Model
{
    protected $table = 'nunsukun';
    protected $fillable = ['title', 'pembimbing', 'youtube'];
}
