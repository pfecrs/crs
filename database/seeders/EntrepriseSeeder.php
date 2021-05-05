<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EntrepriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entreprises')->insert([
            'nom' => Str::random(10),
            'secteur' => Str::random(10).'@gmail.com',
            'adresse' => Hash::make('password'),
            'id_document' => 'jjj',
        ]);
    }
}
