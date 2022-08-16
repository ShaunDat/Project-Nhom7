<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Product extends Model
{
    // use HasFactory;
    protected $fillable = ['title','price','description','image','category_id','updated_at', 'created_at'];
    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }
    protected $table = 'product';

    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo('App\Models\Category','id');
    }
}