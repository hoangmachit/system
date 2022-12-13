<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contracts;
use App\Models\ContractCustomers;
use App\Models\ContractPrices;
use App\Models\ContractCancels;
use App\Models\ContractDesigns;
use App\Models\ContractDomains;
use App\Models\ContractHostings;
use Carbon\Carbon;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contracts = [
            [
                'id'   => 4,
                'name' => 'Hà Thị Bích Trâm',
                'code' => 'TKW001',
                'signing_date' => Carbon::now(),
                'date_of_delivery' => Carbon::now(),
                'payment_1st'  => 3500000,
                'payment_2st'  => 7600000,
                'date_payment_1st' => Carbon::now(),
                'date_payment_2st' => Carbon::now(),
                'note' => "My Note ComPany Hà Thị Bích Trâm",
                'status' => 1,
                'customer' => [
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
                ],
                'prices' => [
                    'price_1st' => 3500000,
                    'price_2st' => 7600000,
                    'price_contract' => 3500000 + 7600000,
                    'price_domain' => 290000,
                    'price_hosting' => 13570000,
                ]
            ],
            [
                'id'   => 1,
                'name' => 'Mạch Văn Hải',
                'code' => 'TKW002',
                'signing_date' => Carbon::now(),
                'date_of_delivery' => Carbon::now(),
                'payment_1st'  => 4200000,
                'payment_2st'  => 3600000,
                'date_payment_1st' => Carbon::now(),
                'date_payment_2st' => Carbon::now(),
                'note' => "My Note ComPany Mạch Văn Hải",
                'status' => 1,
                'customer' => [
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
                'prices' => [
                    'price_1st' => 4200000,
                    'price_2st' => 3600000,
                    'price_contract' => 4200000 + 3600000,
                    'price_domain' => 290000,
                    'price_hosting' => 4800000,
                ]
            ],
            [
                'id'   => 2,
                'name' => 'Phạm Bá Thọ',
                'code' => 'TKW003',
                'signing_date' => Carbon::now(),
                'date_of_delivery' => Carbon::now(),
                'payment_1st'  => 3300000,
                'payment_2st'  => 4400000,
                'date_payment_1st' => Carbon::now(),
                'date_payment_2st' => Carbon::now(),
                'note' => "My Note ComPany Phạm Bá Thọ",
                'status' => 1,
                'customer' => [
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
                'prices' => [
                    'price_1st' => 4200000,
                    'price_2st' => 3600000,
                    'price_contract' => 4200000 + 3600000,
                    'price_domain' => 290000,
                    'price_hosting' => 4800000,
                ]
            ],
            [
                'id'   => 3,
                'name' => 'Lê Văn Long',
                'code' => 'TKW004',
                'signing_date' => Carbon::now(),
                'date_of_delivery' => Carbon::now(),
                'payment_1st'  => 1200000,
                'payment_2st'  => 3500000,
                'date_payment_1st' => Carbon::now(),
                'date_payment_2st' => Carbon::now(),
                'note' => "My Note ComPany Phạm Bá Thọ",
                'status' => 1,
                'customer' => [
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
                'prices' => [
                    'price_1st' => 1200000,
                    'price_2st' => 3500000,
                    'price_contract' => 1200000 + 3500000,
                    'price_domain' => 290000,
                    'price_hosting' => 4800000,
                ]
            ]
        ];

        foreach ($contracts as $key => $item) {
            $data_contract = [
                'name' => $item['name'],
                'code' => $item['code'],
                'signing_date' => $item['signing_date'],
                'date_of_delivery' => $item['date_of_delivery'],
                'payment_1st'  => $item['payment_1st'],
                'payment_2st'  => $item['payment_2st'],
                'date_payment_1st' => $item['date_payment_1st'],
                'date_payment_2st' => $item['date_payment_2st'],
                'note' => $item['note'],
                'status' => $item['status'],
            ];
            $contract = Contracts::create($data_contract);
            if (!empty($contract)) {
                // contract Customer
                $customer = [];
                $customer = $item['customer'];
                $customer['contract_id'] = $contract->id;
                $customer['customer_id'] = $item['id'];
                $contract_customer = ContractCustomers::create($customer);

                // contract Design
                $contract_design   = ContractDesigns::create([
                    'contract_id' => $contract->id,
                    'design_id'   => $item['id']
                ]);
                // contract Domain
                $contract_domain   = ContractDomains::create([
                    'contract_id' => $contract->id,
                    'domain_id'   => $item['id']
                ]);
                // contract Hosting
                $contract_hosting   = ContractHostings::create([
                    'contract_id' => $contract->id,
                    'hosting_id'   => $item['id']
                ]);
                // contract Prices
                $price = [];
                $price = $item['prices'];
                $price['contract_id'] = $contract->id;
                $contract_prices   = ContractPrices::create($price);
            }
        }
    }
}
