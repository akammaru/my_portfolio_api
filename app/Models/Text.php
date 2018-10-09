<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Text extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $fillable = [
        'key',
        'component',
        'language',
        'text'
    ];
}
