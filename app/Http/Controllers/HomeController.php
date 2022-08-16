<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Products;
class HomeController extends Controller
{
    
    public function index()
    {
        
        $slider = Slider::where('status','0')->get();
        
        return view('index',compact('slider',));
    }

    public function lienhe()
    {
        return view('lienhe');
    }

    
}
