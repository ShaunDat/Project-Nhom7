<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\banner;

class banner extends Model
{
    // use HasFactory;
    protected $fillable = ['banner_id','banner_name','image'];
    public function banners(){
        return $this->hasMany(banner::class);
    }
}
