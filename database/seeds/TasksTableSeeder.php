<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Task::create([
            'title' => 'Lorem Ipsum',
            'description' => 'Ship-wide stars, to the habitat technically shields up. It is a delighted mystery, sir. Ferengis resist from minds like interstellar emitters.Ship-wide stars, to the habitat technically shields up. It is a delighted mystery, sir. Ferengis resist from minds like interstellar emitters.',
            'end' => \Carbon\Carbon::now()->addDays(2),
            'app_user_id' => 1
        ]);
        \App\Task::create([
            'title' => 'Dolor Sit',
            'description' => 'Ship-wide stars, to the habitat technically shields up. It is a delighted mystery, sir. Ferengis resist from minds like interstellar emitters.Ship-wide stars, to the habitat technically shields up. It is a delighted mystery, sir. Ferengis resist from minds like interstellar emitters.',
            'end' => \Carbon\Carbon::now()->addDays(2),
            'app_user_id' => 1
        ]);
    }
}
