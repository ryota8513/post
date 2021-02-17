<html>
    <head>
        <style>
            th,td{
                border-bottom:solid;
            }
        </style>
    </head>
    <table>
        <form name="edit" method="POST" action="edit">
           @csrf
           <tr>
               <th>ID</th>
               <th>名前</th>
               <th>メールアドレス</th>
               <th>年齢</th>
               <th>性別</th>
               <th>お問い合わせ</th><br>
           </tr>
           
           @foreach($posts as $post)
           <tr>
               <td>{{$post->id}}</td>
               <td>{{$post->name}}</td>
               <td>{{$post->email}}</td>
               <td>{{$post->age}}</td>
               <td>{{$post->gender}}</td>
               <td>{{$post->message}}</td><br>
           </tr>
           @endforeach
           <input type="text" name="id">
           <button type="submit">編集</button>
        </form>
        
        <!--<form name="delete" method="POST" action="delete">-->
        <!--    @csrf-->
        <!--    <input type="text" name="id">-->
        <!--    <buttom type="submit">削除</buttom>-->
        <!--</form>-->
    </tabley>
</html>