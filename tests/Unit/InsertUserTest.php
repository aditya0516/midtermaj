<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
       $user  = new User();
        $user->name='suzy';
        $user->email='suzy@abc.com' ;
        $user->password='asdfghjkl';

        $this->assertTrue($user->save());
    }
}
