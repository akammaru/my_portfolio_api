<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Translation extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $fillable = [
        "label",
        "category",
        "translation",
        "language"
    ];
}
