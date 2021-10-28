<?php

namespace Tests\Feature;

use App\Models\Bombero;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VerBomberosTest extends TestCase
{



    public function test_example()
    {
        $response = $this->get('/bomberos');

        $response->assertStatus(200);
    }
}
