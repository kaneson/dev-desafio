<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Comment;


class SiteController extends Controller
{
    public function __construct(Film $film)
    {

        $this->film = $film;

    }


    public function index(){
       
        $films = $this->film->paginate(3);
        //$films = $this->film->all();

        return view('/pages/home', [ 'films' => $films]);
    }

    public function detail($id){

        $films = film::where([
                  ['id', '=',$id],
        ])->get();

        $comments = comment::where([
            ['film_id', '=',$id],
        ])->get();

        return view('/pages/detail', [ 'films' => $films, 'comments' => $comments ] );
    }

    public function comment(Request $request){

        $film_id = $request->input('comment_post_ID');

        Comment::create([
            'film_id'      => $request->input('comment_post_ID'),
            'comment'      => $request->input('comment'),
            'name'         => $request->input('name'),
            'email'        => $request->input('email'),
       ]);
  
       return redirect()->route('detail', ['id' => $film_id]);
  }

  public function view_comment($id){

    $comments = comment::where([
        ['id', '=',$id],
    ])->get();

    return view('/pages/view_comment', ['comments' => $comments ] );

}

  public function comment_update(Request $request){

    $film_id = $request->input('film_id');

    Comment::where([
        'id' => $request->input('id')
        ])->update([
        'comment' => $request->input('comment'),
        'name' => $request->input('name'),
        'email' => $request->input('email'),
    ]);

    return redirect()->route('detail', ['id' => $film_id]);

  }



}
