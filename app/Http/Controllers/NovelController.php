<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function index()
    {
        $novels = Novel::all();
        

        return view('novels', compact('novels'));
    }

    public function show($id){ //affiche uniquement un livre en particulier
        $novel = Novel::findOrFail($id); //findOrFail permet si pas d'id de renvoyer une 404
        
        return view('novel', [
            'novel' => $novel
        ]);
    } 

    public function create()
    {
        return view ('createnovels');
    }

    public function store(Request $request)
    {
        $test = Novel::create([
            'title'     => $request->title,
            'author_firstname'  => $request->author_firstname,
            'author_lastname'   => $request->author_lastname,
            'isbn'              => $request->isbn,
            'book_type'         => $request->book_type,
            'pages_nb'          => $request->pages_nb,
            'volumes_nb'        => $request->volumes_nb
        ]);
        dd($test);
    }
}
