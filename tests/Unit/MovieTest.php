<?php

namespace Tests\Unit;

use Tests\TestCase;

class MovieTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testGettingAllMovies()
    {
            $response = $this->json('GET', '/api/v1/movies');
            $response->assertStatus(200);

            //Write the response in laravel.log
        \Log::info(1, [$response->getContent()]);
        }


}
