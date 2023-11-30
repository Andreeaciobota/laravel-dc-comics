<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ComicsTableSeeder extends Seeder
{
    public function run()
    {
        $json = File::get(storage_path('path_al_tuo_file.json'));
        $data = json_decode($json);

        foreach ($data as $comic) {
            DB::table('comics')->insert([
                'title' => $comic->title,
                'description' => $comic->description,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
