<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // Field yang boleh diisi secara massal
    protected $fillable = [
        'name',
        'email',
        'birthdate'
    ];

    // Relasi dengan Book
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
