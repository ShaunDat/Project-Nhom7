<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $categories=Category::all();
        return view('Categories/category', compact("categories"));
=======
        $category=Category::all();
        return view('Categories/category', compact("category"));
>>>>>>> 2f58b2851c556e39b7f119904f5b370085fb5203
    }
    public function getCreate()
    {
        return view('Categories/createCategory');
    }
    //Hàm store để thêm dữ liệu
    public function postCreate(Request $request)
    {

<<<<<<< HEAD
        $categories = new Category();
        $categories->name = $request->name;
        $categories->save();
=======
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
>>>>>>> 2f58b2851c556e39b7f119904f5b370085fb5203
      
       return redirect()->route('Categories/Category');;

    }
<<<<<<< HEAD
    public function getEditCate($id)
    {
       $data['cate'] = Category::find($id);
       return view('Categories/editCategory',$data);
    }
    public function postEditCate(Request $request,$id)
    {
        $categories = Category::find($id);  
        $categories->name = $request->name;
        $categories->save();
=======
    public function getEditCate($category_id)
    {
       $data['cate'] = Category::find($category_id);
       return view('Categories/editCategory',$data);
    }
    public function postEditCate(Request $request,$category_id)
    {
        $category = Category::find($category_id);  
        $category->category_name = $request->category_name;
        $category->save();
>>>>>>> 2f58b2851c556e39b7f119904f5b370085fb5203
        return redirect()->route('Categories/Category');
    }
    public function delete($id)
    {
<<<<<<< HEAD
        $categories = Category::find($id);
        $categories->delete();
=======
        $category = Category::find($id);
        $category->delete();
>>>>>>> 2f58b2851c556e39b7f119904f5b370085fb5203
        return back();
        // return redirect()->route('/Categories/Category')
        // ->with('success', 'Category deleted successfully');
    }
}
