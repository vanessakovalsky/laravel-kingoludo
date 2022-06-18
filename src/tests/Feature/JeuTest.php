<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\JeuModel;
use App\Models\Categorie;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JeuTest extends TestCase
{
    use RefreshDatabase;

    protected $categorie;

    protected $demo_user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->categorie = Categorie::create(
            ['nom' => 'expert']
        );
        JeuModel::factory()->count(150)->create(['categorie_id' => $this->categorie->id]);
        $this->demo_user = User::create(
            [
                'email' => 'monmail@moi.org',
                'name' => 'test',
                'password' => 'jfdkshgkjfs',
                'role' => 'membre'
        ]);

    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testListeJeu()
    {
        $response = $this->actingAs($this->demo_user)->get('/jeu');
        $response->assertStatus(200);
        $response->assertSee('Mon composant d\'alerte',false);
    }
}
