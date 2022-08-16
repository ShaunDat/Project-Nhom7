<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Admin extends Model
{
    protected $table =  'admins';
    protected $fillable =[
            'name',
            'password',
            'image',
            'status',
    ];
=======
use App\Models\Category;

class Admin extends Model
{
    public $table ="categories";
    public $primaryKey = 'id';
    public $fillable = ['name'];
    public $timestamps = false;
>>>>>>> 13fb811d970d9c8da99797bd3c3b66d9fea14f06
}
