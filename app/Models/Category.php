<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category_name', 'category_image'];

    public $timestamps = false;

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
