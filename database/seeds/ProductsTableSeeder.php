<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Sample data 1
        DB::table('products')->insert([
          'name' => 'Pakej Makan Pagi',
          'price' => 10.00
        ]);
        // Sample data 2
        DB::table('products')->insert([
          'name' => 'Pakej Makan Tengahari',
          'price' => 15.00
        ]);
        // Sample data 3
        DB::table('products')->insert([
          'name' => 'Pakej Makan Petang',
          'price' => 5.00
        ]);
    }
}
