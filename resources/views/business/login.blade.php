<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>buisnessログインページ</h1>
  <form action="/bus/login" method="post">
    {{ csrf_field() }}
    <tr><th>mail: </th><td><input type="text" name="email"></td></tr>
    <tr><th>password: </th><td><input type="text" name="password"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
  </form>
</body>
</html>