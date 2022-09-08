<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>TAGS</h1>
<form action="/tag" method="POST">
    @csrf
    <label for="title">details</label>
    <input type="text" name="details"><br>
    <label for="title">product_id</label>
    <input type="text" name="product_id"><br>
  <button type="submit">Submit</button>
</form>
</body>
</html>