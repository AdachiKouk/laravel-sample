<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post List</title>
</head>
<body>
    <h1>Post List</h1>

    @if(count($posts) > 0)
        <ul>
            @foreach($posts as $post)
                <li>{{ $post->title }}</li>
            @endforeach
        </ul>
    @else
        <p>No posts available.</p>
    @endif
</body>
</html>
