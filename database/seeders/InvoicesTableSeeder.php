<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert([
            'name' => 'Faktura za garnek',
            'amount' => '1',
            'price_netto' => '157',
            'price_brutto' => '200'
        ]);

        DB::table('invoices')->insert([
            'name' => 'Faktura za rower',
            'amount' => '1',
            'price_netto' => '1962',
            'price_brutto' => '2499'
        ]);

        DB::table('invoices')->insert([
            'name' => 'Faktura za samochód',
            'amount' => '1',
            'price_netto' => '20781',
            'price_brutto' => '30000'
        ]);
    }
}
