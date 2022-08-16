<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class SliderController extends Controller
{
    
    public function index()
    {
        $slider = Slider::all();

        return view('manager.slider.index',compact('slider'));
    }

    
    public function create()
    {
        //
        return view('manager.slider.create');
    }

    
    public function store(Request $request)
    {   
        $slider = new Slider();
        $slider->title = $request->input('title');
        $slider->description= $request->input('description');
        $slider->status= $request->input('description');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/banner/',$filename);
            $slider->image = $filename ;

        }
        $slider->status = $request->input('status') == true ? '1':'0';
        $slider->save();
        return redirect()->back()->with('status','added Successfully');
    }

   
    public function show()
    {
        //
    }

   
    public function edit($id)
    {
        $slider = Slider::find($id);
 
        return view('manager.slider.edit',compact('slider'));
    }

   
    public function update(Request $request, $id)
    {   
        $slider = Slider::find($id);
        $slider->title = $request->input('title');
        $slider->description= $request->input('description');
        $slider->status= $request->input('description');

        if($request->hasfile('image'))
        {
            $destination = 'uploads/banner/'.$slider->image;
            if(File::exists($destination)){
                   File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/banner/',$filename);
            $slider->image = $filename ;

        }
        $slider->status = $request->input('status') == true ? '1':'0';
        $slider->save();
        return redirect()->back()->with('status','slider update Successfully');
    }

    
    public function destroy(Slider $slider)
    {
        //
        if ($slider-> count() > 0 ){

               $destination = 'uploads/banner/'.$slider->image;
               if(File::exists($destination)){
                  File::delete($destination);
                 }   

        $slider->delete(); 
        
        return redirect()->back()->with('status','slider Delete Successfully');
        }
        return redirect()->back()->with('status','error ');

    }
}
