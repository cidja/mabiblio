<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Novel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

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
       
        $request->validate([ //source:https://laravel.com/docs/9.x/validation#validation-quickstart
            'title'     => ['required','min:5','max:255','unique:novels'], // titre requis, min 5 maxi 255 caractères et unique dans la table posts new Uppercase fait référence à rule uppercase
            'author_firstname'  => ['required'],
            'author_lastname'   => ['required'],
            'pages_nb'          => ['required'],

        ]); 

        //isbn n'est pas défini on met null (isbn pas obligatoire)
        $isbn=null;
        if($request->isbn){
            $isbn = $request->isbn;
        }

        //si on ne rentre pas d'image nous affichons une image par défaut c'est la condition d'en dessous 
        $filename = 'covers/default.png';//chemin de l'image par défaut
        $path = $filename;//$path obligatoire pour la suite en dessous
        if($request->cover){
            $filename = time() . '.' . $request->file('cover')->extension(); //nom de l'image qui sera enregistré
            //requête qui va enregistrer le fichier dans le dossier public 
        $path = $request->file('cover')->storeAs(
            'covers',
            $filename,
            'public'
        );
        } 
       
        $novel = Novel::create([
            'title'     => $request->title,
            'author_firstname'  => $request->author_firstname,
            'author_lastname'   => $request->author_lastname,
            'isbn'              => $isbn,
            'book_type'         => $request->book_type,
            'pages_nb'          => $request->pages_nb,
            'volumes_nb'        => $request->volumes_nb,
            'begin_at'          => $request->begin_at,
            'cover'             => $filename,
            'finish'            => $request->finish,
        ]);
       
        $image= new Image();
        $image->path = $path;

        $novel->image()->save($image);
        //affiche une banniere quand success : https://www.tutsmake.com/laravel-8-flash-message-example-tutorial/
        return Redirect()->route('welcome')->withSuccess("Livre bien ajouté pour le voir cliquer");
        //return redirect()->route('welcome');
    }

    public function update($id){
        $novel = Novel::findOrFail($id);
        return view('updatenovels', [
            'novel' => $novel
        ]);
    }
    public function storeupdate($id,Request $request){
        $request->validate([ //source:https://laravel.com/docs/9.x/validation#validation-quickstart
            'title'     => ['required','min:5','max:255'], // titre requis, min 5 maxi 255 caractères et unique dans la table posts new Uppercase fait référence à rule uppercase
            'author_firstname'  => ['required'],
            'author_lastname'   => ['required'],
            'finish'            => ['required'],

        ]); 

        //isbn n'est pas défini on met null (isbn pas obligatoire)
        $isbn=null;
        if($request->isbn){
            $isbn = $request->isbn;
        }

        //MIS EN PAUSE POUR LA MODIF DE L'image pour le moment 
        //si on ne rentre pas d'image nous affichons une image par défaut c'est la condition d'en dessous 
       /*  $filename = 'covers/default.png';//chemin de l'image par défaut
        $path = $filename;//$path obligatoire pour la suite en dessous
        if($request->cover){
            $filename = time() . '.' . $request->file('cover')->extension(); //nom de l'image qui sera enregistré
            //requête qui va enregistrer le fichier dans le dossier public 
        $path = $request->file('cover')->storeAs(
            'covers',
            $filename,
            'public'
        );
        }  */
       
        $novel = Novel::where('id', $request->id)->update([
            'title'             => $request->title,
            'author_firstname'  => $request->author_firstname,
            'author_lastname'   => $request->author_lastname,
            'isbn'              => $isbn,
            'book_type'         => $request->book_type,
            'pages_nb'          => $request->pages_nb,
            'volumes_nb'        => $request->volumes_nb,
            'begin_at'          => $request->begin_at,
            /* 'cover'             => $filename, */ 
            'finish'            => $request->finish,
        ]);
       
       /*  $image= new Image();
        $image->path = $path;
        $novel->image()->save($image); */
        return redirect()->route('novels.show',['id'=> $request->id]);  //renvoi la vue show
    }

    public function delete($id){
        $novel = Novel::find($id);
        $novel->delete();
        return redirect()->route('welcome')->with('info', $novel->title . " supprimé");
    }
}
