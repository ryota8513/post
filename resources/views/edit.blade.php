<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編集フォーム</title>
    <!--<link rel="stylesheet"  href="info.css">-->
    
    <script type="text/javascript" src="contact.js"></script>
    <style>
        
    </style>
</head>
<body>
  <header>
    <div class="header">編集フォーム</div>
  </header>
    <div class="container">
      <div class="info">
    <form name="form1" method="POST" action="editform">
    @csrf
    
    <h1>ID</h1>
     <input class="search" name="id" type="text" placeholder="ID" value="{{$posts->id}}" readonly>
    
    <h1>名前</h1>
     <input class="search" name="name" type="text" placeholder="氏名入力" value="{{$posts->name}}">
    
    <h1>メールアドレス</h1>
     <input class="search" name="email" type="text" placeholder="info@email.com" value="{{$posts->email}}" >
    
    <h1>年齢</h1>
     <input class="search" name="age" type="text" placeholder="年齢" value="{{$posts->age}}">

     <h1>性別</h1>
       <input class="search" type="radio" name="gender" value="男" /value="{{$posts->gender}}"> 男
       <input class="search" type="radio" name="gender" value="女" /value="{{$posts->gender}}"> 女
       
       <h1>問合内容</h1>
       <textarea   placeholder="お問い合わせ内容を入力して下さい" name="message"></textarea>
       
       <input type="submit" onclick="return check();" value="更新">
    </from>
</div>
</div>
    
</body>
</html>
    
    