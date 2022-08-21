<?php

namespace App\Http\Controllers;

<<<<<<< HEAD

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

    
    
=======
use Illuminate\Http\Request;
use App\Models\Slider;
>>>>>>> fc66f2e98782b780ee93495ae710db9d7c196658


<<<<<<< HEAD


    
   
    
=======
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
>>>>>>> fc66f2e98782b780ee93495ae710db9d7c196658
    public function create()
    {
        //
        return view('manager.slider.create');
    }

<<<<<<< HEAD
    

=======
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
>>>>>>> fc66f2e98782b780ee93495ae710db9d7c196658
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
        return redirect()->back()->with('status','added slider Successfully');
    }


<<<<<<< HEAD
   
   

    


   
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

=======
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
>>>>>>> fc66f2e98782b780ee93495ae710db9d7c196658
    
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
<<<<<<< HEAD
        return redirect()->back()->with('status','error ');
    }

=======
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        return view('manager.slider.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
>>>>>>> fc66f2e98782b780ee93495ae710db9d7c196658
}
    




    
    
    

    
    

