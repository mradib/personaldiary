<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<form action="{{ route ('user.post') }}" method="POST">
    {{csrf_field()}}
    <input type="text" name="name"><br>
    <input type="text" name="post"><br>
    <input type="submit" name="submit" value="Make A Post">
</form>

<hr>
<hr>
@foreach($posts as $post)
    <p> {{ $post->name }} :-> {{ $post->post }} </p>
@endforeach
{{ $posts->links() }}
</body>
</html>
