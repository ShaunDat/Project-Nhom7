<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Category extends Model
{
<<<<<<< HEAD
    public $table ="category";
    public $primaryKey = 'category_id';
    public $fillable = ['category_name'];
=======
    public $table ="categories";
    public $primaryKey = 'id';
    public $fillable = ['name'];
>>>>>>> f18dffac5047036861e949cc9b7128d7b4b0b7ab
    public $timestamps = false;

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }

}