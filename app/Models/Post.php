<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\QueryFilters\Active;
use App\QueryFilters\MaxCount;
use App\QueryFilters\Sort;
use Illuminate\Pipeline\Pipeline;

class Post extends Model
{
    use HasFactory;

    public static function allPosts()
    {
       return app(Pipeline::class)
        ->send(Post::query())
        ->through([
            Active::class,
            Sort::class,
            MaxCount::class
        ])
        ->thenReturn()
        //->get();
        ->paginate(5);
    }
}
