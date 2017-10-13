<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->delete();

        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('user')->insert([
                'user_nama' => $faker->name,
                'user_foto' => $faker->imageUrl($width = 700, $height = 400, 'cats')
            ]);
        }
    }
}