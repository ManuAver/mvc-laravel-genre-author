<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Fiksi', 'description' => 'Cerita rekaan yang bersifat imajinatif.'],
            ['id' => 2, 'name' => 'Non-Fiksi', 'description' => 'Buku berdasarkan fakta nyata.'],
            ['id' => 3, 'name' => 'Misteri', 'description' => 'Kisah dengan teka-teki dan penyelidikan.'],
            ['id' => 4, 'name' => 'Romansa', 'description' => 'Cerita yang berfokus pada hubungan cinta.'],
            ['id' => 5, 'name' => 'Fantasi', 'description' => 'Kisah dengan elemen magis dan dunia imajiner.'],
        ];
    }
}
