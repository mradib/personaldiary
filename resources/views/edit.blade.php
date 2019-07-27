</head>
<body>
<h3>user register</h3>
@include('error')
<form action="{{route('update',[$user->id])}}" method ="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type = "text" name = "username" placeholder="user name" value="{{$user->username}}"></br>
    <input type = "text" name = "email" placeholder="email address" value="{{$user->email}}"></br>

    <input type = "file" name = "image" accept="image/jpeg"></br>
    <input type = "submit" name = "submit" value = "Update">
</form>>
</body>>
</html>>