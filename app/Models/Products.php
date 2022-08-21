<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Products extends Model
{
    // use HasFactory;
<<<<<<< HEAD

    protected $fillable = ['title','price','description','image','id','updated_at', 'created_at'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    protected $table = 'products';

    protected $primaryKey = 'id';
=======
    protected $fillable = ['title','price','description','image','category_id','updated_at', 'created_at'];
    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }
    protected $table = 'product';
>>>>>>> fc66f2e98782b780ee93495ae710db9d7c196658

    

}