<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
</head>

<body>
  <form action="/" method="POST">
    @csrf
    <input type="text" name="content" >
    <input type="submit">
  </form>
</body>

</html>