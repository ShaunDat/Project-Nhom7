<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        // $arr['product'] = Product::with('Category')->get();
        // return view ('Products/Product')->with($arr);
        $products = Product::all();
        return view('Products/Product', compact("products"));
    }
    public function create()
    {
        $category = Category::all();
        return view('Products/Create',['category' => $category]);
    }
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'price' => 'required',
                'description' => 'required',
                'imageProduct' => 'required|image|mimes:jpg,jpeg,png|max:1000'
                
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            if ($request->hasFile('imageProduct')) {
                $file = $request->file('imageProduct');
                $path = public_path('images/products');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $fileName);
            } else {
                $fileName = 'noname.jpg';
            }
            $newProduct = new Product();
            $newProduct->title = $request->title;
            $newProduct->price = $request->price;
            $newProduct->description = $request->description;
            $newProduct->image = $fileName;
            $newProduct->category_id = $request->category;
            $newProduct->save();
            return redirect()->route('/Products/Product')
                ->with('success', 'Product created successfully.');
        }
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('Products.showProduct', ['product' => $product]);
    }

    public function edit($id)
    {
        $category = Category::all();
        $product = Product::with('category') -> find($id);
        return view('Products.editProduct', ['product' => $product, 'category' => $category]);
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'price' => 'required',
                'description' => 'required'
                
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $fileName="";
            if ($request->hasFile('imageProduct')) {
                $file = $request->file('imageProduct');
                $path = public_path('image/product');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $fileName);
            }
            $product = Product::find($id);
            if ($product != null) {                
                $product->title = $request->title;
                $product->price = $request->price;
                $product->description = $request->description;
                if ($fileName) {
                    $product->image = $fileName;
                }
                $product->category_id = $request->category;
                $product->save();
                return redirect()->route('/Products/Product')
                ->with('success', 'Product updated successfully');
            } 
            else
            {
                return redirect()->route('/Products/Product')
                ->with('Error', 'Product not update');
            }         
        }       
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $image_path = "/images/products/.$product->image";  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $product->delete();
        return redirect()->route('/Products/Product')
            ->with('success', 'Product deleted successfully');
    }

}
