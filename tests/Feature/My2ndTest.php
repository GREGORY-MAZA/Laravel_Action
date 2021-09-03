<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class My2ndTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_campus_page()
    {
        $response = $this->get('/campus');

        $response->assertStatus(404);
    }
}