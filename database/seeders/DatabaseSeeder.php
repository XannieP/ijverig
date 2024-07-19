<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 
            'firstname' => 'xander',
            'lastname' => 'plieger',
            'email' => 'xander360noscope@gmail.com',
            'is_admin' => '1',
            'password' => '$2y$10$GN2lDE3YvVMC1bV5zUEU3e.GiFyW5KQ8qpsuqECmOqtzT6bOqatyq',
        ]);

    }
}
