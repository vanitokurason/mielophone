<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAnnotation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function brodskyList()
    {
        return $this->belongsTo(BrodskyList::class);
    }
}
