<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::factory()->create([
            'Name'=>'Trần Ngọc Thạnh',
            'Address'=>'Gò Vấp',
            'PhoneNumber'=>'0767898888',
            'Email'=>'ngocthanh@gmail.com',
            'Username'=>'ngocthanh',
            'Password'=>'123456a!',
        ]);
        Employee::factory()->create([
            'Name'=>'Phan Thanh Khoái',
            'Address'=>'Bình Thạnh',
            'PhoneNumber'=>'0767899999',
            'Email'=>'thanhkhoai@gmail.com',
            'Username'=>'thanhkhoai',
            'Password'=>'123456a!',
        ]);
    }
}
