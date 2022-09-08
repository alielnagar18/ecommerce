<form action="", method="POST">
    @csrf
    @foreach($data as $datas)
    <input type="text" name="details" value="{{$datas['details']}}"><br>
    @endforeach
</form>
