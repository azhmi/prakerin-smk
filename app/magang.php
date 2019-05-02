<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class magang extends Model
{
    //
    protected $table = 'magangs';
    protected $primaryKey = 'mgid';
    protected $fillable = ['magsisid','magpemid','magtemid','tahun'];
}
