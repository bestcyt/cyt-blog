<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogArticles extends Model
{
    protected $table = "cyt_blog_articles";
    public $timestamps = false;

    public function getAll(){

        return 111;
    }
}
