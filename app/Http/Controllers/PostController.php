<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
}
?>