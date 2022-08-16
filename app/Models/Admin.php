<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Admin extends Model
{
    public $table ="categories";
    public $primaryKey = 'id';
    public $fillable = ['name'];
    public $timestamps = false;

}
