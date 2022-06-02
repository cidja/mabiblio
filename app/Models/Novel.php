<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author_firstname',
        'author_lastname',
        'isbn',
        'book_type',
        'pages_nb',
        'volumes_nb'
    ];

}
