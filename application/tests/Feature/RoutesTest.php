<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoutesTest extends TestCase
{

    public function test_change_key(): void
    {
        $response = $this->get('/change-key');

        $response->assertStatus(200);
    }

    public function test_index(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create(): void
    {
        $response = $this->get('/create');

        $response->assertStatus(200);
    }
}