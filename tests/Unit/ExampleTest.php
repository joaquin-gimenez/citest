<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetOne()
    {
        // $response = $this->json('GET', '/user/jaco');

        // $response->assertJson(['name' => 'jaco']);
    }

    public function testGetAll()
    {
        $response = $this->json('GET', '/user');

        $response->assertJsonCount(10);
    }
}
