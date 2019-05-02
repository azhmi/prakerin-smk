<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembimbing extends Model
{
    //
    protected $table = 'pembimbings';
    protected $primaryKey = 'pbid';
    protected $fillable = ['pbnam','pbnip','pbtemla','pbtangla','pbjk'];
}
