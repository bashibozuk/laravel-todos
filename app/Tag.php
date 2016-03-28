<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function todos()
    {
        return $this->belongsToMany(\App\Todo::class);
    }
}
