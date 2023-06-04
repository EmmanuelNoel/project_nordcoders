<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
use App\Models\Video;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    //

    public function index()
    {




       /* $posts = [
            'Mon super premier titre',
            'Mon super second titre'
        ];*/
        $posts = Post::orderBy('title')->get();
        $videos = Video::find(1);

        $title="Mon super titre";
        return view('articles', compact('posts','videos'));
        /*return view('articles')->with('title',$title);*/
    }

    public function show($id)
    {
      /*  $posts = [
            1 => 'Mon titre n1',
            2 => 'Mon titre n2',
        ];*/

        $post = Post::findorFail($id);

       // $post = $posts[$id] ?? 'Pas de titre';

        return view('article')->with('post',$post);

    }
    public function contact()
    {
        return view('contact');
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {

       // dd($request->path());
       // dd($request->is('posts/*'));
      //  dd($request->routeIs('post.store'));
      //  dd($request->url());
      //  dd($request->ip());

      //$name =   Storage::disk('local')->put('avatars', $request->file('avatar'));

      //  dd(Storage::disk('local')->exists($name));

        //return Storage::download($name);

        $filename = time().'.'.$request->file('avatar')->extension();


          //  dd($filename);

           $path =  $request->file('avatar')->storeAs(
                'avatars',
                $filename,
                'public'
            );


/*
        $validated = $request->validate([
            'title' => ['required' ,'max:255', 'min:5', 'unique:posts', new Uppercase],
            'contenu' => ['required'],
        ]);*/

        /*$request->validate([
            'title' => ['required' ,'max:255', 'min:5', 'unique:posts', new Uppercase],
            'contenu' => ['required'],
        ]);*/


       $post =  Post::create([
            'title' => $request->title,
            'content' => $request->contenu
        ]);


        $image = new Image();
        $image->path = $path;

        $post->image()->save($image);

        return redirect()->back();
    }

    public function register()
    {
        $post = Post::find(10);
        $video = Video::find(1);


        $comment1 = new Comment([ 'title' => 'premier commentaire', 'content' => 'contenu1']);
        $comment2 = new Comment([ 'title' => 'deuxième commentaire', 'content' => 'contenu2']);


        $post->comments()->saveMany([
            $comment1,
            $comment2
        ]);
        $comment3 = new Comment( [
            'title' => 'troisième commentaire',
            'content' => 'contenu3'

        ]);
        $video->comments()->save($comment3);
    }
}
