<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Http\Requests\MovieUpdateRequest;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::orderBy('rate', 'desc')->take(10)->get();

        return view('movies.index', [
            'movies' => $movies,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('movies.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieRequest $request)
    {
        $movies = new Movie($request->all());
        $movies->img = $request->file('img')->store('movies');
        $movies->save();
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movies.show',[
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $categories = Category::all();
        return view('movies.edit', compact('categories'), [
            'movie' => $movie
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
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

}
