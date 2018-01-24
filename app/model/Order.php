<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='order';
    public $timestamps = true;
    protected $fillable=['m_id','m_quantity'];
}
