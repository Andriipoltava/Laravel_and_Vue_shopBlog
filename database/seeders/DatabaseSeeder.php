<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call([RolesSeeder::class]);
//        $make = User::factory()->make();


        User::factory(1)->admin()->create();

        Ticket::factory()->create();

        User::factory(1)
            ->admin()
            ->has(Ticket::factory(1)->count(3))
            ->create();
        User::factory(5)->client()->create();;
    }
}
