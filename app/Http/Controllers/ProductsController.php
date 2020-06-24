<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Cartalyst\Stripe\Laravel\Facades\Stripe;


class ProductsController extends Controller
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
            'price'         =>  'required',
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
        return redirect()->route('dashboard')->with('success', 'Asset has been successfully added. Thank you');
        //     return redirect('/admin.dashboard')->with('success', 'Assets have been added successfully');
    }

    public function destroy(Product $product)
    {
        $cart = new Cart(session()->get('cart'));
        $cart->remove($product->id);

        if ($cart->totalQty <= 0) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.show')->with('success', 'Product has been removed');
    }

    public function addToCart(Product $product)
    {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }

        $cart->add($product);

        session()->put('cart', $cart);
        return redirect()->route('market')->with('success', 'Product has been added');
    }

    public function showCart()
    {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }
        return view('cart.show', compact('cart'));
    }

    public function checkout($amount)
    {
        return view('cart.checkout', compact('amount'));
    }

    public function charge(Request $request)
    {
        $charge = Stripe::charges()->create([
            'currency'      =>  'EUR',
            'source'        =>  $request->stripeToken,
            'amount'        =>  $request->amount,
            'description'   =>  'Testing my new App'
        ]);

        $chargeId = $charge['id'];

        if ($chargeId) {
            // save Purchases in purchase table..
            auth()->user()->purchases()->create([
                'cart'  => serialize(session()->get('cart'))
            ]);

            // clearn Cart (session)
            session()->forget('cart');

            return redirect()->route('market')->with('success', 'Payment was successful. Thank you');
        } else {
            return redirect()->back();
        }
    }

    public function download()
    {
        $item = DB::table('products')->get();
        //return response()->download(storage_path("app/uploads/", $item));

        return view('admin.purchase.index', compact('item'));
    }
}
