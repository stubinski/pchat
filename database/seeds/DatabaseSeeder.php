<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create(
            [
                'email' => 'leszekstubinski@gmail.com',
                'name' => 'Leszek'
            ]
        );

        factory(User::class)->create(
            [
                'email' => 'b.project@wp.pl',
                'name' => 'Gosia'
            ]
        );

        factory(User::class)->create(
            [
                'email' => 'cafomat@cafomat.pl',
                'name' => 'Agnieszka'
            ]
        );
    }
}
