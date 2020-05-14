<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['topic_name', 'title', 'sub_title', 'blog1', 'blog2', 'blog3', 'blog4', 'blog5', 'blog6', 'image1', 'image2', 'image3', 'image4', 'url'];
}
