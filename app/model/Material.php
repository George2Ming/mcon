<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table='material';
    public $timestamps = true;
    protected $fillable=['name','description','price','stock'];
}
