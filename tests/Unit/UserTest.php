<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertDatabaseHas('users',
        ['first_name'=>"Roman"]);
        $this->assertDatabaseHas('users',
        ['email'=>"admin@gmail.com"]);
    }
 }

