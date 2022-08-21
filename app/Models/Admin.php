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
>>>>>>> fc66f2e98782b780ee93495ae710db9d7c196658

}
