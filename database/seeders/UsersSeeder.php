<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 10; $i++) { 
		if($i % 2 == 0){
			$gender = 'Male';
		}else{
			$gender = 'Female';
		}
            DB::table('users')->insert([ 
                'first_name' => 'f_test'.$i,
                'last_name' => 'l_test'.$i,
                'email' => 'test'.$i.'@gmail.com',
                'password' => Hash::make('12345678'),
                'dob' => date('Y-m-d h:i:s'),
                'gender' => $gender,
                'annual_income' => mt_rand(100000,999999),
                'occupation' => "Government Job",
                'family_type' => "Joint Family",
                'manglik' => "No",
                'partner_expected_income' => mt_rand(100000,999999).' - '.mt_rand(100000,999999),
                'partner_occupation' => json_encode(array('Government Job', 'Business')),
                'partner_family_type' => json_encode(array('Nuclear Family')),
                'partner_manglik' => "No",
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]);
			
        }
    }
}
