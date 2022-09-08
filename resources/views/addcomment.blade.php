<form action="add/{{$data['id']}}", method="POST">
    @csrf
    <input type="text" name="comment" value="{{$data['comment']}}"><br>
    <button type="submit">add comment</button>

</form>
