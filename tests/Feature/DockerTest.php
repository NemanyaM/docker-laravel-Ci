<?php

use Tests\TestCase;

class DockerTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->get('/docker');

        $response->assertStatus(200);
    }
}