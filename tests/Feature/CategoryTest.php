<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CategoryTest extends TestCase
{
    public $enpoint = 'api/cateogy';
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
       factory(User::class,20)->create();
       $response =  $this->json('GET', $this->enpoint);
       $response->assertStatus(200)->assertJsonStructure([
            "data" => [
                "id",
                "name",
                "slug"
            ],
            "meta" => [
                "current_page" => 1 ,
                "from" => 1,
                "last_page" => 1,
                "path" => 2,
                "per_page" => 1,
                "to" =>2,
                "total" => 1
            ]
        ]);
    }
}
