<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Blog</title>
</head>

<body>
    <form action="{{ route('blog.update',['id' => $blog->id]) }}" method="post">
        {{-- {{ route('blog.store') }} --}}
        @csrf

        <input type="text" name="title" id="title" value="{{ $blog->title }}" placeholder="title">
        @error('title')
            {{ $message }}
        @enderror

        <br />

        <input type="text" name="body" value="{{ $blog->body }}" id="body" placeholder="body">
        @error('body')
            {{ $message }}
        @enderror

        <input type="submit" value="save">

    </form>
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
</body>

</html>
