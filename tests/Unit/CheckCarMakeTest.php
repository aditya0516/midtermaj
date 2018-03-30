<?php

namespace Tests\Unit;
use App\car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckCarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModelCheck()
    {
        $car = car::find(7);
        $carmake=$car->Make;
        $this->assertContains($carmake, ['ford', 'honda', 'toyota']);
    }

}
