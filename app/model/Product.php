<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    public $timestamps = false;
    protected $fillable=['name','designer_id','material1_id',
        'material1_num','material2_id','material2_num',
        'material3_id','material3_num','prime_cost'];
}
