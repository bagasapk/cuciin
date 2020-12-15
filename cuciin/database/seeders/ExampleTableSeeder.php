<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExampleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `examples` (`product_id`, `name`, `price`) VALUES
        (1, 'Baju','2000'),
        (2, 'Celana','2000'),
        (3, 'Karpet','5000'),
        (4, 'Helm','2000'),
        (5, 'Sepatu','1000'),
        (6, 'Tas','1000'),
        (7, 'Jas','3000'),
        (8, 'Jaket','3000'),
        (9, 'Lain','1000');");
    }
}
