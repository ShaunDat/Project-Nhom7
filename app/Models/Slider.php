<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table= 'slider';
    protected $fillable= [
        'title','description','status','image'   
    ];
<<<<<<< HEAD
}
=======
}
>>>>>>> 13fb811d970d9c8da99797bd3c3b66d9fea14f06
