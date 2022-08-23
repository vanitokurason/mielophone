<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brodsky_list extends Model
{
    use HasFactory;

    public function getMain()
    {
        return $this->hasOne(Book::class);
    }
}
