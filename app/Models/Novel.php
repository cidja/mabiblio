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
        'active',
        'finish',
        'begin_at',
        'end_at',
    ];
    const BOOKTYPE = [
        'papier', 'ebook', 'hentai', 'tamere', 'clé à choc','manchot','manche chaud'
    ];
    public function image()
    {
        return $this->hasOne(Image::class);
    }

}
