<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Note;
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
        User::factory()->create([
            'email' => 'jdcardenas@email.com',
            'password' => bcrypt('A.123456')

        ]);
        Note::factory(30)->create();
    }
}
