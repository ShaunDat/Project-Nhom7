<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Products extends Model
{
    // use HasFactory;
<<<<<<< HEAD:app/Models/Products.php
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
>>>>>>> 13fb811d970d9c8da99797bd3c3b66d9fea14f06:app/Models/Product.php

    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo('App\Models\Category','id');
    }
}