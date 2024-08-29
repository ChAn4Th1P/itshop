<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'โอวันติน',
                'product_type_id' => 2,
                'image_url' => 'https://st.bigc-cs.com/cdn-cgi/image/format=webp,quality=90/public/media/catalog/product/03/88/8850086164903/8850086164903_1-20221128120234-.jpg',
                'cost' => 50.00,
                'price' => 55.00,
                'qty' => 100

        ],
            [
                'name' => 'เครื่องดื่มช็อกโกแลต ไมโล',
                'product_type_id' => 2,
                'image_url' => 'https://image.makewebcdn.com/makeweb/m_1920x0/LnLGuwlBA/DefaultData/6000015_1.png?v=202405291424',
                'cost' => 40.00,
                'price' => 45.00,
                'qty' => 150
            ],
        ];
        DB::table('products')->insert($data);
    }
}
