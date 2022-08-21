<?php

namespace App\Http\Controllers;



use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Admin;


class AdminController extends Controller
{
    
    public function index()
    {
        $admin = Admin::all();

        return view('admin.admins.index',compact('admin'));
    }
    public function admin()
    {
        // $categories=Category::all();
        return view('Admin/adminMain');
    }

    
    public function create()
    {
        //
        return view('admin.admins.create');
    }

    
    public function store(Request $request)
    {   
        $admin = new Admin();
        $admin->name = $request->input('name');
        $admin->password= $request->input('password');
        $admin->status= $request->input('password');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/admin/',$filename);
            $admin->image = $filename ;

        }
        $admin->status = $request->input('status') == true ? '1':'0';
        $admin->save();
        return redirect()->back()->with('status','added Successfully');
    }

   
    public function edit($id)
    {
        $admin = Admin::find($id);
 
        return view('admin.admins.edit',compact('admin'));
    }

   
    public function update(Request $request, $id)
    {   
        $admin = Admin::find($id);
        $admin->name = $request->input('name');
        $admin->password= $request->input('password');
        $admin->status= $request->input('password');

        if($request->hasfile('image'))
        {
            $destination = 'uploads/admin/'.$admin->image;
            if(File::exists($destination)){
                   File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/admin/',$filename);
            $admin->image = $filename ;

        }
        $admin->status = $request->input('status') == true ? '1':'0';
        $admin->save();
        return redirect()->back()->with('status','Admin update Successfully');
    }

    
    public function destroy(Admin $admin)
    {
        //
        if ($admin-> count() > 0 ){

               $destination = 'uploads/admin/'.$admin->image;
               if(File::exists($destination)){
                  File::delete($destination);
                 }   

        $admin->delete(); 
        
        return redirect()->back()->with('status',' Delete logo Successfully');
        }
        return redirect()->back()->with('status','error ');

    }

   
   
}
<<<<<<< HEAD





=======
>>>>>>> fc66f2e98782b780ee93495ae710db9d7c196658
