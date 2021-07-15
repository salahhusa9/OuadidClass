<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Blog</title>
</head>

<body>

        <div class="alert alert-danger">
            <ul>
                @foreach ($blogs as $blog)
                    <li>{{ $blog->id }}) {{ $blog->title }} : {{ $blog->body }} <A href="{{ route('blog.edit', $blog->id) }}"> edit </A>  <A href="{{ route('blog.delete', $blog->id) }}"> delete </A></li>
                @endforeach
            </ul>
        </div>

</body>

</html>
