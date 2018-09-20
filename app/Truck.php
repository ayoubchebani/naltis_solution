<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Vehicle 
{
    use HasParent;
    protected $table='vehicles';
   
}
