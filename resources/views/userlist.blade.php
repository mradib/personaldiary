<html>
<body>
<h1>
astese
</h1>
@if(session('deletesuccess'))
    <p style="color:red;">{{session('deletesuccess')}}</p>
@endif
<table border = "1px">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->username}}}</td>
        <td>{{$user->email}}</td>
        <td><img src="{{asset('image/'.$user->image)}}" alt="" width="200px"></td>
        <td><a href="{{route('edit',[$user->id])}}">edit</a>||<a href="{{route('delete',[$user->id])}}">delete</a></td>
    </tr>
        @endforeach
</table>>
</body>
</html>
