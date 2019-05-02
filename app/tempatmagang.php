<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tempatmagang extends Model
{
    //
    protected $table = 'tempatmagangs';
    protected $primaryKey = 'tmid';
    protected $fillable = ['tmnam','tasmalt','tamprof'];
}
