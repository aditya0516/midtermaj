<?php

namespace Tests\Unit;
use App\car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckCarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = car::find(7);
        $caryear = (int) $car->year;
        $this->assertInternalType('integer', $caryear);
    }
}
