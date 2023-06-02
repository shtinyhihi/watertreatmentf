<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Brand;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'news_id',
        'news_title',
        'news_News',
        'news_image',
        'news_tag',
    ];

}
