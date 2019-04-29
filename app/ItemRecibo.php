<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemRecibo extends Model
{
    //Necessário para usar SoftDelete
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
