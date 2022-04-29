<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Apropos;

class AproposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apropos::firstOrCreate([
            'image' => '',
            'titre'=> 'Mon titre',
            'context' => 'Mon contexte',
            'cv' => '',
        ])->save();
    }
}
