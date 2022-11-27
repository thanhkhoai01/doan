<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::factory()->create([
            'Name'=>'Nhà Cung Cấp Rau Bà Chiểu',
            'Address'=>'Q. Bình Thạnh, Tp. Hồ Chí Minh',
            'PhoneNumber'=>'0767654534',
        ]);
        Supplier::factory()->create([
            'Name'=>'Nhà Cung Cấp Trái Cây Minh Long',
            'Address'=>'Q.9 , Tp. Hồ Chí Minh',
            'PhoneNumber'=>'0767654555',
        ]);
        Supplier::factory()->create([
            'Name'=>'Nhà Cung Cấp Phân Phối Thực Phẩm Nghĩa Trang',
            'Address'=>'Q.11 , Tp. Hồ Chí Minh',
            'PhoneNumber'=>'0767654999',
        ]);
    }
}
