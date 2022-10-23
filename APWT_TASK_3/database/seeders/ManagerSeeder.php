<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*\App\Models\Manager::factory()->create([
            'email'=> 'another@email.com',
            'password'=> '1234'
        ]);*/
        DB::table('managers')->insert([
            'email' => Str::random(5).'@gmail.com',
            'password' => 'password',
        ]);
        
    }
}
