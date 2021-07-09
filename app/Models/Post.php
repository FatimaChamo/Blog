<?php

namespace App\Models;
 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at','updated_at' ];

    //relacion inversa post-user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //relacion inversa uno a muchos, post-category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //relacion muchos a muchos
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //relacion polimorfica 1 a 1 
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
 
}
