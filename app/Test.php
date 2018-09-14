<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

    public $name;
    public $dateOfRelease;

    public function getFoto($data) {
        return $data;
    }


}