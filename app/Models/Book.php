<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Field yang boleh diisi secara massal
    protected $fillable = [
        'title',       // Judul buku
        'author_id',   // ID penulis (foreign key)
        'genre_id',    // ID genre (foreign key)
        'published_year',
        'price'
    ];

    // Relasi dengan Author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relasi dengan Genre
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
