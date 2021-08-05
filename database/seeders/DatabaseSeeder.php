<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            ['admin_name' => 'Super Admin','hospital_name' => 'Demo Hospital',
            'hospital_code' => '000','email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345'),'address' => 'Dhaka',
            'contact_no' => '01800000000','role' => '1', 'is_active' => '1'],
            
            ['admin_name' => 'Hospital Admin','hospital_name' => 'Labaid Hospital',
            'hospital_code' => '111','email' => 'admin@gmail.com',
            'password' => Hash::make('12345'),'address' => 'Dhaka',
            'contact_no' => '01700000000','role' => '2', 'is_active' => '1'],
        ]);
        DB::table('services')->insert([
            ['service_name' => 'ICU', 'admin_id' => '1'],
            ['service_name' => 'CCU', 'admin_id' => '1'],
            ['service_name' => 'Oxygen Cylinder', 'admin_id' => '1'],
            ['service_name' => 'Pulse Oxymeter', 'admin_id' => '1'],
            ['service_name' => 'Blood Bank', 'admin_id' => '1'],
            ['service_name' => 'Medical Tests', 'admin_id' => '1'],
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
