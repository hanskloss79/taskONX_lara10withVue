<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Client;
use Illuminate\Support\Str;

class HTTPTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    /**
     *  Full routing tests.
     */
    // all clients list - index action
    // GET - URI: clients
    public function test_route_clients_index()
    {
        $response = $this->get('/clients');
        //dump($response);
        $response->assertStatus(200);
    }
    ///////////////////////////////////////////////
    // one client - show action
    // GET - URI: clients/{client}
    public function test_route_client_id()
    {
        $client = Client::orderBy('id', 'desc')->first();
        $response = $this->get('/clients/'. $client->id);
        $response->assertStatus(200);
        //dump($response);
    }
    ///////////////////////////////////////////////
    // client - create action
    // GET - URI: clients/create
    public function test_route_client_create()
    {
        $response = $this->get('/clients/create');
        $response->assertStatus(200);
        //dump($response);
    }
    ///////////////////////////////////////////////
    // client - edit action
    // GET - URI: clients/edit
    public function test_route_client_edit()
    {
        $client = Client::orderBy('id', 'desc')->first();
        $response = $this->get('/clients/'. $client->id . '/edit');
        
        //dump($response);
        $response->assertStatus(200);
    }
    ///////////////////////////////////////////////
    // client - store action
    // POST - URI: clients
    public function test_route_client_store()
    {
        $newClient = [
            'firstname' => Str::random(8),
            'lastname' => Str::random(14),
            'email' => Str::random(8) . '@gmail.com',
            'phone' => '7000000' . rand(0, 9),
            'birth_date' => date("Y-m-d")
        ];
        $response = $this->post('/clients', $newClient);
        // at the end of store method there is redirection
        // so we are checking 302 code
        $response->assertStatus(302);
    }
    ///////////////////////////////////////////////
    // client - update action
    // PUT - URI: clients/{client}
    public function test_route_client_update()
    {
        $oldClient = Client::orderBy('id', 'desc')->first();
        $newClient = [
            'firstname' => Str::random(8),
            'lastname' => Str::random(14),
            'email' => Str::random(8) . '@gmail.com',
            'phone' => '69100000' . rand(0, 9),
            'birth_date' => date("Y-m-d")
        ];
        $response = $this->put('/clients/' . $oldClient->id, $newClient);
        // at the end of update method there is redirection
        // so we are checking 302 code
        $response->assertStatus(302);
    }
    ///////////////////////////////////////////////
    // client - destroy action
    // DELETE - URI: clients/{client}
    public function test_route_client_destroy()
    {
        $client = Client::orderBy('id', 'desc')->first();
        $response = $this->delete('/clients/'. $client->id);
        // at the end of destroy method there is redirection
        // so we are checking 302 code
        $response->assertStatus(302);
    }

}

