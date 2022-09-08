<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Tags
    <form action="/tag" method="GET">
    @csrf
  <button type="submit">Submit</button>
</form>

<br><br><br>

<h1>CATEGORY</h1>
<form action="/category" method="GET" enctype="multipart/form-data">
    @csrf
    <button type="submit">Submit</button>
</form>
  
<br><br><br>

<h1>Product</h1>
<form action="/product" method="GET" enctype="multipart/form-data">
    @csrf
    <button type="submit">Submit</button>
</form>

</body>
</html>


