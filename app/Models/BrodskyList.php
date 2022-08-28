<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookAnnotation;

class BrodskyList extends Model
{
    use HasFactory;

    public function bookAnnotation()
    {
        return $this->hasOne(BookAnnotation::class);
    }
}
