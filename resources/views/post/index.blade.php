<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Posts</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Status</th>
            <th>Title</th>
        </tr>
        @foreach ($posts as $post )

            <tr>
                <td>{{ $post->active }}</td>
                <td>{{ $post->title }}</td>
            </tr>

        @endforeach

    </table>


    {{-- {{ $posts->links() }} --}}

    {{ $posts->appends(request()->input())->links() }}

</body>
</html>
