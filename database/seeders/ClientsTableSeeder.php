<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // fill in data into Clients table - one record
        DB::table('clients')->insert(
            [
                'firstname' => Str::random(8),
                'lastname' => Str::random(14),
                'email' => Str::random(8) . '@gmail.com',
                'phone' => '69100000' . rand(0, 9),
                'birth_date' => date("Y-m-d"),
                'created_at' => date("Y-m-d H:i:s")
            ]
        );
        // using Factory
        Client::factory()->count(15)->create();
    }
}
