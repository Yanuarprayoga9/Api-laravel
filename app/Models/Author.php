<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['author_name', 'author_email'];
    public function posts()
    {
        return $this->hasMany(Post::class);
    } 
}
