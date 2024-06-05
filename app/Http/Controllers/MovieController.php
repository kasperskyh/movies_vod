<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\MovieRequest;
use App\Http\Requests\MovieUpdateRequest;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use App\Models\Movie;
use App\Models\User;
=======
use App\Models\Category;
use App\Models\Movie;
>>>>>>> origin/master
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $movies = Movie::orderBy('rate', 'desc')->take(10)->get();

        return view('movies.index', [
            'movies' => $movies,
        ]);
    }
=======
        $movies = Movie::with('category')->get();

        return view('moviess.index', [
            'movies' => Movie::all()
        ]);
    }

>>>>>>> origin/master
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        $categories = Category::all();
        return view('movies.create', compact('categories'));
=======
        //
>>>>>>> origin/master
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(MovieRequest $request)
    {
        $movies = new Movie($request->all());
        $movies->img = $request->file('img')->store('movies');
        $movies->save();
        return redirect()->route('welcome');
=======
    public function store(Request $request)
    {
        //
>>>>>>> origin/master
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(Movie $movie)
    {
        return view('movies.show',[
            'movie' => $movie
        ]);
=======
    public function show(string $id)
    {
        //
>>>>>>> origin/master
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(Movie $movie)
    {
        $categories = Category::all();
        return view('movies.edit', compact('categories'), [
            'movie' => $movie
        ]);
=======
    public function edit(string $id)
    {
        //
>>>>>>> origin/master
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(MovieUpdateRequest $request, Movie $movie)
{
    if ($request->hasFile('img')) {
        $oldImagePath = public_path('storage/' . $movie->img);
        if (File::exists($oldImagePath)) {
            File::delete($oldImagePath);
        }

        $movie->img = $request->file('img')->store('movies');
    }

    $movie->fill($request->except('img'));
    $movie->save();
    return redirect()->route('movies.show', $movie->id);
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
{
    // Sprawdź, czy istnieją powiązane zamówienia
    if ($movie->order()->exists()) {
        return back()->with('error', 'Nie można usunąć tego filmu, ponieważ istnieją powiązane zamówienia.');
    }

    // Usuń obraz, jeśli istnieje
    $imagePath = public_path('storage/' . $movie->img);
    if (File::exists($imagePath)) {
        File::delete($imagePath);
    }

    // Usuń film, jeśli nie ma powiązanych zamówień
    $movie->delete();

    return redirect()->route('welcome');
}

=======
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
>>>>>>> origin/master
}
