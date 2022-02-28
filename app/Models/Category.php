<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'subcategories',
        'dscrp',
        'status',
        'popular',
        'img',
        'meta_title',
        'meta_dscrp',
        'meta_keywords',

    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id','id');
    }
}
