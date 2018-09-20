<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model implements VehicleInterface
{
    protected $fillable = ["make", "model", "year" , "type"];


}
