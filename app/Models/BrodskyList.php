<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrodskyList extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function bookAnnotation()
    {
        return $this->hasOne(BookAnnotation::class);
    }
}
