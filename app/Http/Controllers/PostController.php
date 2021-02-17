<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   
public function post(){
    return view('post');
}

public function create(Request $request){
    $posts = new Post();
    $posts ->name = $request -> name;
    $posts ->email = $request -> email;
    $posts ->age = $request -> age;
    $posts ->gender = $request -> gender;
    $posts ->message = $request -> message;
    $posts ->save();
    return redirect('post');
}

public function list(){
    $posts = post::all();
    $date = ['post'=>$posts];
    return view('list',$date);
}


}

?>