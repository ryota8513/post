<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <!--<link rel="stylesheet"  href="info.css">-->
    
    <script type="text/javascript" src="contact.js"></script>
    <style>
        
    </style>
</head>
<body>
    
    
    <header>
        <div class="header">Contact</div>
    </header>
    <div class="container">
        <div class="info">
     
    <form name="form1" method="POST" action='posts'>
        @csrf
       <h1>名前</h1>
       <input class="search" name="name" type="text" placeholder="氏名入力">
       
       <h1>メールアドレス</h1>
       <input class="search" name="email" type="text" placeholder="info@email.com">
       
       <h1>年齢</h1>
       <input class="search" name="age" type="text" placeholder="年齢">
    
       <h1>性別</h1>
       <input class="search" type="radio" name="gender" value="男" /> 男
     <input class="search" type="radio" name="gender" value="女" /> 女
       
       <h1>問合内容</h1>
       <textarea   placeholder="お問い合わせ内容を入力して下さい" name="message"></textarea>
       
       <input type="submit" onclick="return check();" value="送信">
    </from>
    
    
    
</div>
</div>
    
</body>
</html>
