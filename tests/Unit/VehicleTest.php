<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Vehicle;
class VehicleTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * It should create a vehicle
     * @test
     */
    public function it_should_create_vehicle()
    {
        //Given
        $vehicle = new Vehicle(["model" => "v1", "make" => "m1", "year" => 2012]);
        //When
        $vehicle->save();
        //Then
        $this->assertEquals('v1', $vehicle->model);
    }
}
