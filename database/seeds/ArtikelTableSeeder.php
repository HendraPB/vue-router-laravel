<?php

use Illuminate\Database\Seeder;

class ArtikelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->delete();

        $faker = Faker\Factory::create();

        $limit = 21;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('artikel')->insert([
                'user_id' => rand(1,10),
                'artikel_judul' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'artikel_isi' => $faker->text($maxNbChars = 200),
                'artikel_gambar' => $faker->imageUrl($width = 1400, $height = 800)
            ]);
        }
    }
}