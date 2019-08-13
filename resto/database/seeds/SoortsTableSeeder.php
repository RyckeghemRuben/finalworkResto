<?php

use Illuminate\Database\Seeder;
use App\Soort;

class SoortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soort = new Soort(['name' => 'Frisdrank']);
        $soort->save();
        $soort = new Soort(['name' => 'Bier op vat']);
        $soort->save();
        $soort = new Soort(['name' => 'Bier op fles']);
        $soort->save();
        $soort = new Soort(['name' => 'Trappist']);
        $soort->save();
        $soort = new Soort(['name' => 'Abdijbier']);
        $soort->save();
        $soort = new Soort(['name' => 'Fruitbier']);
        $soort->save();
        $soort = new Soort(['name' => 'Apperitieven']);
        $soort->save();
        $soort = new Soort(['name' => 'Sterke Dranken']);
        $soort->save();
        $soort = new Soort(['name' => 'Wijn']);
        $soort->save();
    }
}
