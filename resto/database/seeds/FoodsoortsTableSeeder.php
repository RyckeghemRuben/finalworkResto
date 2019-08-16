<?php

use Illuminate\Database\Seeder;
use App\Foodsoort;

class FoodsoortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodsoort = new Foodsoort(['name' => 'Snacks']);
        $foodsoort->save();
    }
}
