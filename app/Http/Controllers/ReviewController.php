<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\Plataforma;
use App\Videojuego;
use App\User;
use App\Review;

class ReviewController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $reviews = Review::all();
        $plataformas = Plataforma::all();
        $videojuegos = Videojuego::all();
        $users = User::all();
        
        return view('reviews.reviews', compact("videojuegos", "reviews", "users", "plataformas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $plataformas = Plataforma::all();
        $videojuegos = Videojuego::all();
        $users = User::all();


        return view("reviews.create", compact("plataformas", "videojuegos", "users"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $reviews = $request->all();
        if ($archivo = $request->file('file')) {
            $nombre = $archivo->getClientOriginalName();
            $archivo->move('images', $nombre);
            $reviews['file'] = $nombre;
        }
        Review::create($reviews);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reviews() {

        $reviews = Review::orderBy('id', 'DESC')->paginate(5);
        return view('reviews.reviewscrud', compact('reviews'));
    }

    public function reviews2() {

        $reviews = Review::orderBy('id', 'DESC')->paginate(5);
        return view('reviews.reviews', compact('reviews'));
    }

    public function show($id) {


        $videojuegos = Review::review_videojuego($id);
        $plataformas = Review::review_plataforma($id);
        $reviews = Review::find($id);
        return view('reviews.reviewcrud', compact('reviews', 'videojuegos', 'plataformas'));
    }

    public function show2($id) {


        $videojuegos = Review::review_videojuego($id);
        $plataformas = Review::review_plataforma($id);
        $reviews = Review::find($id);
        return view('reviews.review', compact('reviews', 'videojuegos', 'plataformas'));
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $reviews = Review::find($id);
        $plataformas = Plataforma::all();
        $videojuegos = Videojuego::all();
        $users = User::all();


        return view("reviews.edit", compact("reviews","plataformas", "videojuegos", "users"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $reviews = Review::findOrFail($id);

        $reviews->update($request->all());

        return redirect("/reviews");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $reviews = Review::findOrFail($id);

        $reviews->delete();

        return redirect("/reviews");
    }

}
