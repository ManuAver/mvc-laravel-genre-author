<?php

namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Andrea Hirata', 'country' => 'Indonesia'],
            ['id' => 2, 'name' => 'Tere Liye', 'country' => 'Indonesia'],
            ['id' => 3, 'name' => 'J.K. Rowling', 'country' => 'Inggris'],
            ['id' => 4, 'name' => 'Haruki Murakami', 'country' => 'Jepang'],
            ['id' => 5, 'name' => 'George Orwell', 'country' => 'Inggris'],
        ];
    }
}
