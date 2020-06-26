<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function productsTable()
    {
        $products = Product::paginate(5);
        return view('admin.dashboard', compact('products'));
    }

    public function editProduct(Product $product)
    {
        $arr['product'] = $product;

        return view('admin.product.edit')->with($arr);
    }

    public function productUpdate(Request $request, Product $product)
    {
        $product->image = $request->image;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('dashboard')->with('success', 'Asset has been successfully Edited');
    }

    public function productDestroy($id)
    {
        Product::destroy($id);

        return redirect()->route('dashboard')->with('success', 'Asset has been successfully Deleted');
    }
}
