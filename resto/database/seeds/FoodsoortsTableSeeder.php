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
        $foodsoort = new Foodsoort(['name' => 'Versnaperingen']);
        $foodsoort->save();
        $foodsoort = new Foodsoort(['name' => 'Voorgerechten']);
        $foodsoort->save();
        $foodsoort = new Foodsoort(['name' => 'Hoofdgerechten']);
        $foodsoort->save();
        $foodsoort = new Foodsoort(['name' => 'Desserts']);
        $foodsoort->save();
    }
}
