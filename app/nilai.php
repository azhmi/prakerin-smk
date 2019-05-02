<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    //
    protected $table = 'nilais';
    protected $primaryKey = 'nilid';
    protected $fillable = ['nilmagid','nil1','nil2','nil3','nil4','nil5','nil6','nil7','nil8','nil9'];
}
