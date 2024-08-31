<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UserModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'document' => '123456',
            'first_name' =>'andres',
            'last_name' =>'mora',
            'address' =>'calle 8 s 85 99',
            'phone' =>'123456',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'document' => '1234567',
            'first_name' =>'carlos',
            'last_name' =>'morales',
            'address' =>'calle 87 s 85 99',
            'phone' =>'123456',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'document' => '12345678',
            'first_name' =>'andrea',
            'last_name' =>'peres',
            'address' =>'carrera 4 78 98',
            'phone' =>'123456',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
