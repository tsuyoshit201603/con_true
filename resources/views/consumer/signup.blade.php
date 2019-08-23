<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>consumerサインアップページ</title>
</head>
<body>
    <h1>consumerサインアップページ</h1>
    <form action="/con/signup_2" method="post">
      {{ csrf_field() }}
      <tr><th>年齢： </th><td><input type="number" name="age"></td></tr>
      <tr><th>職業： </th><td><input type="text" name="job"></td></tr>
      <tr><th>電話番号（最初の0は入力しないでください）：　</th><td><input type="number" name="phone_num"></td></tr>
      <tr><th>自由記入欄（任意）：　</th><td><textarea name="text"></textarea></td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</body>
</html>