<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * Missing required fields
     *
     * @return void
     */
    public function testStoreMissingLastName()
    {
        $response = $this->postJson('/api/users', ['first_name' => 'John']);
        $response
            ->assertStatus(422)
            ->assertJsonValidationErrors(['last_name' => 'The last name field is required']);
    }

    /**
     * Store succeeds
     *
     * @return void
     */
    public function testStoreSucceeds()
    {
        $response = $this->postJson('/api/users', ['first_name' => 'John', 'last_name' => 'Doe']);

        $response
            ->assertStatus(201)
            ->assertJsonFragment(['first_name' => 'John', 'last_name' => 'Doe']);
    }
}
