<?php

namespace Tests\Unit;
use App\car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountCar()
    {
        $cars = car::All();
        $recordCount = $cars->count();
        $this->assertEquals(50, $recordCount);
    }
}
