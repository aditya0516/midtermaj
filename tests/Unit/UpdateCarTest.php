<?php

namespace Tests\Unit;
use App\car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Car::find(20);
        $car->year = '2000';
        $this->assertTrue($car->save());
    }
}
