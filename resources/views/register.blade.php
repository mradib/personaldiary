<html>
<head>
    register
</head>
<body>
<h3>user register</h3>
<form action="{{route('register')}}" method ="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type = "text" name = "username" placeholder="user name"></br>
    <input type = "text" name = "email" placeholder="email address"></br>
    <input type = "text" name = "password" placeholder="password"></br>
    <input type = "text" name = "confirm" placeholder="repeat password"></br>
    <input type = "file" name = "pic" accept="image/jpeg"></br>
    <input type = "submit" name = "submit" value = "register">
</form>>
</body>>
</html>>