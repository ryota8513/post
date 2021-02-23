<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   
public function post(){
    return view('post');
}

//requestはユーザーから送られた情報を、サーバーに送るため
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
//postsテーブルからの情報をpostモデルを介して全て取得している
public function list(){
    $posts = post::all();
    $date = ['posts'=>$posts];
    return view('list',$date);
}
public function edit(Request $request){
    $posts=post::find($request->id);
    return view('edit',compact('posts'));
}
//情報を更新する
public function update(Request $request){
     $posts=post::find($request->id);
     $posts->name=$request->name;
     $posts->email=$request->email;
     $posts->age=$request->age;
     $posts->gender=$request->gender;
     $posts->message=$request->message;
     $posts->save();
     return redirect('list');
}

//情報を削除する
public function delete(Request $request){
    $posts=post::find($request->id);
    return view('delete',compact('posts'));
}
// $posts=post::find($request->id)->delete();で削除できる
public function remove(Request $request){
    $posts=post::find($request->id)->delete();
    $posts->name=$request->name;
    $posts->email=$request->email;
    $posts->age=$request->age;
    $posts->gender=$request->gender;
    $posts->message=$request->message;
    $posts->save();
    return redirect('list');
}
}

?>