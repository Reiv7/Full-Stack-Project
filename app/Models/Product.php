<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = 
    [
        'cate_id',
        'name',
        'subcategories',
        'smol_dscrp',
        'dscrp',
        'o_price',
        's_price',
        'img',
        'qty',
        'tax',
        'status',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_dscrp',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'cate_id','id');
    }
}
