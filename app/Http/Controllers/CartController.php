<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $movie = Cart::where('user_id', auth()->user()->id)->get();

        return response()->json([
            'success' => true,
            'movie' => $movie
        ]);
        
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'movie_id' => 'required',
            'booking_date' => 'required'
        ]);

        $auth_id = auth()->user()->id;

        $cart = Cart::create([
            'user_id' => $auth_id,
            'movie_id' => $request->movie_id,
            'booking_date' => $request->booking_date
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Created data successfully',
            'cart' => $cart
        ]);
    }

    public function destroy($id)
    {
        Movie::findOrFail($id)->delete();

        return response()->json([
            'success' => true,
            'message' => "Successfully deleted"
        ]);
    }

}
