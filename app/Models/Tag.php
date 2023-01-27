<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Tag extends Model
{
    use HasFactory;

    function post(){

        return $this->belongsToMany(Post::class);

    }

}
