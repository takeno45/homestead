<?php

namespace App\Models; //名前空間 APPの中のModelsに入っているという意味

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'detail',
    ];
}
