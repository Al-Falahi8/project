<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Symfony\Component\Console\Input\Input;

class ProductsController extends Controller
{

    public function index()
    {
        return view('admin.product.create');
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $formInput = $request->except('image');

        // Validation
        $this->validate($request, [
            'name'          =>  'bail|required',
            'description'   =>  'required',
            'price'   =>  'required',
            'image'         =>  'image|max:10000'
        ]);

        // image upload

        $image = $request->image;
        if ($image) {
            $imageName = $image->getClientOriginalName();
            $image->move('uploads/products/', $imageName);
            $formInput['image'] = $imageName;
        }


        Product::create($formInput);
        return redirect()->route('dashboard');
    }






    // $request->validate([
    //     'product_name' => 'bail|required',
    //     'product_description' => 'required'
    // ]);


    // if ($request->isMethod('post')) {
    // $data = $request->all();

    // $product = new Product;
    // $product->product_name = $request->input('product_name');
    // $product->product_description = $request->input('product_description');
    // $product->product_price = $request->input('product_price');
    // if (!empty($data['product_description'])) {
    //     $request->product_description = $data['product_description'];
    // }
    // $product->product_price = $data['product_price'];

    // // Upload Image
    // if ($request->hasFile('product_img')) {
    //     $product_img = $request->product_img;
    //     foreach ($product_img as $value) {

    //         $filename = time() . '-' . $value->getClientOriginalName();
    //     // $extension = $product_img->getClientOriginalExtension();
    //     // $filename = rand(111, 99999) . '-' . $extension;
    // $location = public_path('uploads/products/' . $filename);

    // Image::make($value)->save($location);
    // }

    //     $product->product_img = $filename;
    // }


    // $product_img = Input::file('product_img',);
    // if ($product_img->isValid()) {

    //     //Image path code
    //     $extension = $product_img->getClientOriginalExtension();
    //     $filename = rand(111, 99999) . '.' . $extension;
    //     $product_img = 'uploads/products/' . $filename;

    //     //Image resize
    //     Image::make($product_img)->resize(500, 500)->save($product_img);
    //     $product->product_img = $filename;
    // }


    //     $product->save();
    //     return redirect('/admin.dashboard')->with('success', 'Assets have been added successfully');
    // }
    // return view('admin.categories.add_product');
}
