<?php

use Illuminate\Database\Seeder;

class AppUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\AppUser::firstOrCreate([
            'token' => '934294029049'
        ]);
    }
}
