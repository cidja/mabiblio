<?php

namespace App\Models;

use App\Models\Novel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    public function novel()
    {
        return $this->belongsTo(Novel::class);
    }
}


