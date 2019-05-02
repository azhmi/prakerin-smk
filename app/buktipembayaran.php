<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buktipembayaran extends Model
{
    //
    protected $table = 'buktipembayarans';
    protected $primaryKey = 'bpid';
    protected $fillable = ['siswaid	','berkas1','berkas2','berkas3','berkas4','berkas5','status'];
}
