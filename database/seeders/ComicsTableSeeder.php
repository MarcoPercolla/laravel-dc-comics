<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $libri = config("comics");

        foreach ($libri as $libro) {
            $nuovo_libro = new Comic();
            $nuovo_libro->title = $libro["title"];
            $nuovo_libro->description = $libro["description"];
            $nuovo_libro->thumb = $libro["thumb"];
            $nuovo_libro->price = $libro["price"];
            $nuovo_libro->series = $libro["series"];
            $nuovo_libro->sale_date = $libro["sale_date"];
            $nuovo_libro->type = $libro["type"];
            $nuovo_libro->save();
        }
    }
}
