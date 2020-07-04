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
        for($i=1; $i<100; $i++){
            DB::table('tasks')->insert([
            'status' => 'status'.$i,
            'content' => 'test content '.$i
            ]);
        }
        
        // DB::table('tasks')->insert([
        //     'status' => 'status 1',
        //     'content' => 'test content 1'
        // ]);
        // DB::table('tasks')->insert([
        //     'status' => 'status 2',
        //     'content' => 'test content 2'
        // ]);
        // DB::table('tasks')->insert([
        //     'status' => 'status 3',
        //     'content' => 'test content 3'
        // ]);
    }
}
