<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function image()
    {
        return $this->hasOne(Image::class);
    }

}
