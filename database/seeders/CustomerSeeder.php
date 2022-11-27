<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()->create([
            'Name'=>'Lương Thanh Tùng',
            'Address'=>'Gò Vấp',
            'PhoneNumber'=>'0767898765',
            'Email'=>'thanhtung@gmail.com',
            'Username'=>'thanhtung',
            'Password'=>'123456a!',
        ]);
        Customer::factory()->create([
            'Name'=>'Nguyễn Minh Tâm',
            'Address'=>'Gò Vấp',
            'PhoneNumber'=>'0767898567',
            'Email'=>'minhtam@gmail.com',
            'Username'=>'minhtam',
            'Password'=>'123456a!',
        ]);
    }
}
