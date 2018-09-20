<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Vehicle 
{
    use HasParent;
    protected $table='vehicles';
}
