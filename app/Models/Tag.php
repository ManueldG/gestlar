<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Tag extends Pivot
{
    use HasFactory;

    function post(){

        return $this->belongsToMany(Post::class);

    }

}
