<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookAnnotation;

class Brodsky_list extends Model
{
    use HasFactory;

    public function getBook()
    {
        return $this->hasOne(BookAnnotation::class);
    }
}
