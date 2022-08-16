<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $category=Category::all();
        return view('Categories/category', compact("category"));
    }
    public function getCreate()
    {
        return view('Categories/createCategory');
    }
    //Hàm store để thêm dữ liệu
    public function postCreate(Request $request)
    {

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
      
       return redirect()->route('Categories/Category');;

    }
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
        return redirect()->route('Categories/Category');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back();
        // return redirect()->route('/Categories/Category')
        // ->with('success', 'Category deleted successfully');
    }
}
