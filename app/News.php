<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'id',
        'title_en',
        'body_en',
        'title_ru',
        'body_ru',
        'img',
    ];
    protected $table = 'news';
    
}
