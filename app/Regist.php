<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regist extends Model
{
    protected $table = 'regist';
    protected $fillable=['no_regist','id_category','id_sector','id_user','notes','image','status'];

    const STATUS_WAITING = 0;
    const STATUS_DONE=1;

}
