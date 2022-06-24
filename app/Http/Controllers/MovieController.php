<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;

class MovieController extends Controller
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
        $movie = Movie::all();

        return response()->json([
            'success' => true,
            'movie' => $movie
        ]);
        
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required', 
            'price' => 'required',
            'date' => 'required',
            'desc' => 'required',
            'category' => 'required|in:Horror,Superhero'
        ]);

        $movie = Movie::create([
            'name' => $request->name, 
            'price' => $request->price,
            'date' => $request->date,
            'desc' => $request->desc,
            'category' => $request->category
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Created data successfully',
            'movie' => $movie
        ]);
    }

    public function show($id)
    {
        $movie = Movie::where('id', $id)->get();

        return response()->json([
            'success' => true,
            'movie' => $movie
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required', 
            'price' => 'required',
            'date' => 'required',
            'desc' => 'required',
            'category' => 'required|in:Horror,Superhero'
        ]);

        $movie = Movie::where('id', $id)->update([
            'name' => $request->name, 
            'price' => $request->price,
            'date' => $request->date,
            'desc' => $request->desc,
            'category' => $request->category
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Updated data successfully'
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

    public function filterPrice(Request $request)
    {
        $this->validate($request, [
            'paginate' => 'required',
        ]);

        $paginate = $request->paginate;
        $category = $request->category;
        $priceMin = $request->priceMin;
        $priceMax = $request->priceMax;
        $movie = "";
        
        if($priceMin && $priceMax){
            $movie = Movie::whereBetween('price', [$priceMin, $priceMax])->paginate($paginate);
        }
        else if($priceMin == "" && $priceMax == ""){
            $movie = Movie::paginate($paginate);
        }
        else if($priceMin == ""){
            $movie = Movie::whereBetween('price', [0, $priceMax])->paginate($paginate);
        }
        else if($priceMax == ""){
            $movie = Movie::whereBetween('price', [$priceMin, 1000000])->paginate($paginate);
        }
        else{
            $movie = "-";
        }


        return response()->json([
            'success' => true,
            'movie' => $movie
        ]);
    }

    public function filterCategory(Request $request)
    {
        $this->validate($request, [
            'paginate' => 'required',
            'category' => 'required|in:Horror,Superhero'
        ]);

        $paginate = $request->paginate;
        $category = $request->category;
        $movie = "";

        switch($category){
            case "Horror":
                $movie = Movie::where('category', $category)->paginate($paginate);
                break;
            case "Superhero":
                $movie = Movie::where('category', $category)->paginate($paginate);
                break;
            default:
                $movie = Movie::all();
        }

        return response()->json([
            'success' => true,
            'movie' => $movie
        ]);
    }
}
