<x-app-layout>
</x-app-layout>

<h1>show all category</h1>
<br>
<table border="1">
    <tr>
        <td>details</td>
        <td>image</td>
    </tr>
    @foreach($categories as $category)
        <tr>
            <td>{{$category->details}}</td>
            <!-- <td>{{$category['image']}}</td> -->
            <td><img src="{{asset('storage/app/public/images/category/'.$category->image)}}"></td>

        </tr>
    @endforeach
</table>
<br><br><br>

<h1>show all Products</h1>
<table border="1">
    <tr>
        <td>details</td>
        <td>category_id</td>
        <td>image</td>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->details}}</td>
            <td>{{$product->category_id}}</td>
            <td><img src="{{asset('storage/app/public/images/product/'.$product->image)}}"></td>
        </tr>
    @endforeach
</table>
<br><br><br>

<h1> choose the product to view tags</h1>
<br>
<table border="1">
    <tr>
        <td>details</td>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->details}}</td>
            <td>
                <a href="{{$product['id']}}" class="redirect" title="redirect" data-toggle="toolip"><i
                class="material-icons">&#xE254;</i></a>
            </td>
        </tr>
    @endforeach
</table>
<br><br><br>
<h1> choose the product and add the comment</h1>

<table border="1">
    <tr>
        <td>details</td>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->details}}</td>
            <td>
                <a href="add/{{$product['id']}}" class="redirect" title="redirect" data-toggle="toolip"><i
                class="material-icons">&#xE254;</i></a>
            </td>
        </tr>
    @endforeach
</table>

<br><br><br>

<h1>show all Products with comment</h1>

<table border="1">
    <tr>
        <td>details</td>
        <td>Comment</td>
        <td>image</td>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->details}}</td>
            <td>{{$product->comment}}</td>
        </tr>
    @endforeach
</table>