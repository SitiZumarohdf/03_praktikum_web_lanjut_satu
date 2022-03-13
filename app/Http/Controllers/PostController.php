<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PostController extends Controller
{
    //
    public function post(){
        $post = Post::all();
        return view('index',['data'=> $post]);
    }
}
