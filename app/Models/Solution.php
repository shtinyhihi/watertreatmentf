<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Brand;

class Solution extends Model
{
    use HasFactory;

    protected $table = 'solutions';

    protected $fillable = [
        'solution_id',
        'solution_name',
        'solution_description',
        'solution_image',
        'solution_file',
        'solution_tag'
    ];


    //relationship between product and brand
    //1 product of 1 brand: 1-1
    // public function brand()
    // {
    //     return $this->belongsTo(Brand::class, 'brand_id', 'id');
    // }
}
