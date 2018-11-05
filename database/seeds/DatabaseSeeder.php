<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');

        foreach (range(0,100) as $i) {
            $box = new App\Box;
            $box->name = 'Box-'.$faker->date($format='Y-m-d');
            $box->save();
            foreach (range(0,mt_rand(1,10)) as $j) {
                $item = new App\Item;
                $item->box_id = $box->id;
                $item->name = 'Item-'.$faker->phoneNumber;
                $item->save();
            }
        }
    }
}
