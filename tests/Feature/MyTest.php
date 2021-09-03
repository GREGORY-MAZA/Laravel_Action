<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_myFuncTest()
    {        
        $myArray = [1, 2, 3];
        $result = array_sum($myArray);
        $this->assertEquals(6, $result);
    }
}