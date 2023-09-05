<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            [
                'id' => 1, 'name' => 'Super admin', 'type' => 'admin', 'mobile' => '0123456789',
                'email' => 'admin@gmail.com', 'password' => '$2y$10$Por88iofbaqei5VC76P3auqq9jH2Z2rdKeAG.DCreiruH4vtVuaLW',
                'image' => '', 'status' => 1
            ]
        ];

        DB::table('admins')->insert($adminRecords);

        // user table

        DB::table('users')->delete();
        $usersRecords = [
            [
                'id' => 1, 'name' => 'shahbaz', 'mobile' => '0123456789',
                'email' => 'shahbaz@gmail.com', 'password' => '$2y$10$Por88iofbaqei5VC76P3auqq9jH2Z2rdKeAG.DCreiruH4vtVuaLW', 'status' => 1
            ]
        ];

        DB::table('users')->insert($usersRecords);

        // foreach ($adminRecords as $key => $record) {
        //     \App\Models\Admin::create($record);
        // }
    }
}
