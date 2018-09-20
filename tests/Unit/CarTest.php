<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarTest extends TestCase
{
    use RefreshDatabase;
    /**
     * It Shoudl Create Car From Vehicle
     * @test
     */
    public function it_should_create_car()
    {
        //Given
        $car = Car::create(['make' => 'Renault', 'model' => 'Megan', 'year' => 2018]);
        //Then
        $this->assertEquals('Renault', $car->make);
    }

    /**
     * It Should Load Only Cars
     * @test
     */
    public function it_should_load_only_cars()
    {
        //Given
        $car = Car::create(['make' => 'Renault', 'model' => 'Megan', 'year' => 2018]);
        //when
        $cars = Car::all();
        //Then 
        $this->assertCount(1, $cars);
    }

}
