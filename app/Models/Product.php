<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Product extends Model
{
    // use HasFactory;
<<<<<<< HEAD
    protected $fillable = ['title','price','description','image','category_id','updated_at', 'created_at'];
    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }
    protected $table = 'product';
=======
    protected $fillable = ['title','price','description','image','id','updated_at', 'created_at'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    protected $table = 'products';

    protected $primaryKey = 'id';
>>>>>>> f18dffac5047036861e949cc9b7128d7b4b0b7ab

    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo('App\Models\Category','id');
    }
}