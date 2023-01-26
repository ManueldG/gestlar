<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    protected $fillable=['categories'];

    public function posts(){
        dump('categories');
        return $this->hasMany(Post::class);
    }
}
