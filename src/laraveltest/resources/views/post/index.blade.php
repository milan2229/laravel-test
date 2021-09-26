@extends('layout.layout')
<div class="blue-button">
    <a href="{{ route('/') }}"
       class="bg-yellow-500 btn hover:bg-yellow-300 font-semibold text-white py-2 px-4 rounded">
        Index
    </a>
</div>
<div class="md:container md:mx-auto">
    <table>
        <thead>
        <tr class="bg-gray-100">
            <th class="w-5/10 px-4 py-2">Title</th>
            <th class="w-1/10 px-4 py-2">Like</th>
            <th class="w-1/10 px-4 py-2">Comment</th>
            <th class="w-3/10 px-4 py-2">Created_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td class="border px-4 py-2">{{$post['title']}}</td>
                <td class="border px-4 py-2">{{$post['likes_count']}}</td>
                <td class="border px-4 py-2">{{$post['comments_count']}}</td>
                <td class="border px-4 py-2">{{$post['created_at']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
