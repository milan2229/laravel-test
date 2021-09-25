@extends('layout.layout')
<body>
<main class="py-4">
    <div class="container">
        <table class="table">
            <tr>
                <th>title</th>
                <th>like</th>
                <th>comment</th>
                <th>created_at</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post['title']}}</td>
                    <td>{{$post['likes_count']}}</td>
                    <td>{{$post['comments_count']}}</td>
                    <td>{{$post['created_at']}}</td>
                </tr>
            @endforeach
        </table>
        <div class="container">
        <div class="item">
            <a class="btn btn-warning btn-lg" href="{{ route('/') }}" role="button">User All</a>
        </div>
    </div>
    </div>
</main>
</body>
