<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    protected $table='designer';
    protected $fillable=['name','designer_id','designer_name'];
}
