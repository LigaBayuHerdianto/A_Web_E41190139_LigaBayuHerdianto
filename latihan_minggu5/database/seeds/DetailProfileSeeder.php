<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address' => 'Mojokerto',
            'no_telp' => '0895331133927',
            'ttl' => '2000-10-25',
            'foto' => 'picture.png'
        ]);

    }
}
