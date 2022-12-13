<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Customers;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'last_name' => 'Lê Văn',
                'first_name' => ' Long',
                'address' => 'Tan Sơn, Tân Phú, TP Hồ Chí Minh',
                'birth_day' => Carbon::now(),
                'identity_card' => 174910487,
                'company_name' => 'MACH GIA GROUP',
                'company_address' => 'Tan Sơn, Tân Phú, TP Hồ Chí Minh',
                'company_tax_code' => '10',
                'email' => 'levanlong@gmail.com',
                'phone' => '0123456789',
                'zalo' => '0123456789',
                'fax' => '0123456789',
                'note' => 'Ghi chú gì ghi nhanh lên Lê Văn Long',
                'status' =>  0,
            ],
            [
                'last_name' => 'Phạm Bá',
                'first_name' => 'Thọ',
                'address' => 'Công Liêm, Nông Cống, Thanh Hóa',
                'birth_day' => Carbon::now(),
                'identity_card' => 174910487,
                'company_name' => 'THO PHAT',
                'company_address' => 'Công Liêm, Nông Cống, Thanh Hóa',
                'company_tax_code' => '10',
                'email' => 'phambatho@gmail.com',
                'phone' => '0987465123',
                'zalo' => '0987465123',
                'fax' => '0987465123',
                'note' => 'Ghi chú gì ghi nhanh lên Phạm Bá Thọ',
                'status' =>  0,
            ],
            [
                'last_name' => 'Mạch Văn',
                'first_name' => ' Hải',
                'address' => '286 Công Hòa, Tân Bình, TP Hồ Chí Minh',
                'birth_day' => Carbon::now(),
                'identity_card' => 174910487,
                'company_name' => 'MANH PHUOC HAI',
                'company_address' => '286 Công Hòa, Tân Bình, TP Hồ Chí Minh',
                'company_tax_code' => '10',
                'email' => 'manhphuochai@gmail.com',
                'phone' => '0909160056',
                'zalo' => '0909160056',
                'fax' => '0909160056',
                'note' => 'Ghi chú gì ghi nhanh lên',
                'status' =>  0,
            ],
            [
                'last_name' => 'Hà Thị',
                'first_name' => ' Bích Trâm',
                'address' => '28/5 Phạm Qúy Thích, Tân Qúy, Tân Phú, TP Hồ Chí Minh',
                'birth_day' => Carbon::now(),
                'identity_card' => 174910487,
                'company_name' => 'SHOP BE TET',
                'company_address' => '28/5 Phạm Qúy Thích, Tân Qúy, Tân Phú, TP Hồ Chí Minh',
                'company_tax_code' => '10',
                'email' => 'hathibichtram0901@gmail.com',
                'phone' => '0937925302',
                'zalo' => '0937925302',
                'fax' => '0937925302',
                'note' => 'Ghi chú gì ghi nhanh lên',
                'status' =>  0,
            ]
        ];
        foreach ($customers as $key => $item) {
            Customers::create($item);
        }
    }
}
