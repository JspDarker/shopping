<?php

namespace App\Http\Controllers;

//use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(/*Request $request*/)
    {
        //$products = Product::where('slug', '!=', 'iphone')->mightAlsoLike()->get();

        //$products = Product::mightAlsoLike()->get();

        // debug for items in cart
        //$data = $request->session()->all();
        //echo "<pre>";print_r($data['cart']);echo "</pre>";die;

        return view('shop.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');

        return redirect()->route('cart.index')->with('msg_success', 'add successfully to cart');
    }

    public function emptyCart()
    {
        Cart::destroy();
    }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
     * @param $rowId
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        $product = Cart::get($rowId);
        if ($product->id != null) {
            Cart::remove($rowId);

            return response([
                'status_code' => 200,
                'name' => $product->name,
                'slug' => $product->slug,
                'count'=> Cart::count()
            ]);
        }
        return back()->with('msg_success', 'item can\'t remove');
    }
}
