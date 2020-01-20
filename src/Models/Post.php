<?php

namespace Magros\BlogPackage\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'blog_package_posts';
    protected $fillable = ['title', 'body'];
}