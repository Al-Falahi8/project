<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, $id)
    {
        // validation
        $request->validate([
            'body'  =>  'required|min:5|max:500'
        ]);

        $product = Product::where('id', $id)->firstOrFail();

        //Current User
        $userId = Auth::id();

        $comment = new Comment();
        $comment->body = $request->body;
        $comment->product()->associate($product);
        $comment->user_id = $userId;

        $comment->save();

        return redirect()->route('DetailProduct', $id)->with('success', 'Commet Has Been Added Successfully');
    }
}
