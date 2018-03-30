<?php

namespace Tests\Unit;
use App\car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = new Car();
        $car->Make = 'honda';
        $car->Model = 'accord';
        $car->year = '2016';
        $this->assertTrue($car->save());
    }
}
