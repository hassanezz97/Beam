<?php

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = [
            'Male',
            'Female',
        ];
        foreach ($genders as $gender){
           Gender::create(['name' => $gender]);
        }

    }
}
