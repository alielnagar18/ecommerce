<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Product</h1>
<form action="/product" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">details</label>
    <input type="text" name="details"><br>
    <label for="title">category_id</label>
    <input type="text" name="category_id"><br>
    <label for="title">image</label>
    <input type="file" name="image"><br>
  <button type="submit">Submit</button>
</form>
</body>
</html>