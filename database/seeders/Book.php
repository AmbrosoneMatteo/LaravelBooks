<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class Book extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'id' => 1,
                'title' => 'Metro 2033',
                'description' => "In 2013, a nuclear war forced a large amount of Moscow's surviving population to relocate to the city's Metro system in search of refuge. Eventually, communities settled within the underground train stations and developed into independent states over time. Factions emerged, ranging from the independent peacekeepers the ''Rangers of the Order'', to the neo-Stalinist Red Line faction and the neo-Nazi Fourth Reich, to the more powerful factions such as Polis, which contained the greatest military power and the most knowledge of the past, and the Hansa regime, which controlled the main ring of metro stations by its sheer economic power.",
                'pages' => 458,
                'author_id' => 1,
                 'image_path' => '1',
                 'category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
