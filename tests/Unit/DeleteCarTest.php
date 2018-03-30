<?php

namespace Tests\Unit;
use App\car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = new car();
        $car->Make = 'toyota';
        $car->Model = 'r';
        $car->Year = '1937';
        $car->save();
        $this->assertTrue($car->delete());
    }
}
