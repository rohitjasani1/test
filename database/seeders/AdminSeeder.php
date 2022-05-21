<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([ 
            'email' => 'rohitjasani1@gmail.com',
            'password' => Hash::make('Rohit123456'),
        ]);
    }
}
