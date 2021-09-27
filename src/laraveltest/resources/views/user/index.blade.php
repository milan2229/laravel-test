@extends('layout.app')
@include('layout.header')
@section('title','Laravel Test')
@section('content')
    <div class="container">
        <div class="blue-button">
            <a href="{{ route('user.create') }}"
               class="bg-blue-700 btn hover:bg-blue-500 font-semibold text-white py-2 px-4 rounded">NEW</a>
        </div>
        <div class="yellow-button">
            <a href="{{ route('post.index') }}"
               class="bg-green-400 btn hover:bg-green-300 font-semibold text-white py-2 px-4 rounded">Qiita</a>
        </div>
    </div>
    <div class="md:container md:mx-auto">
        <table>
            <thead>
            <tr class="bg-gray-100">
                <th class="w-1/4 px-4 py-2">Name</th>
                <th class="w-1/4 px-4 py-2">Birthday</th>
                <th class="w-1/4 px-4 py-2">Email</th>
                <th class="w-1/4 px-4 py-2">Is Cool?</th>
                <th class="w-1/4 px-4 py-2"></th>
                <th class="w-1/4 px-4 py-2"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->name }}</td>
                    <td class="border px-4 py-2">{{ $user->birthday }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    <td class="border px-4 py-2">{{ $user->iscool }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('user.edit',$user->id) }}"
                           class="bg-green-700 btn hover:bg-green-500 font-semibold text-white py-2 px-4 rounded">edit</a>
                    </td>
                    <td class="border px-4 py-2">
                        <form method="POST" action="{{route('user.destroy',$user->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                    class="bg-red-700 btn hover:bg-red-500 font-semibold text-white py-2 px-4 rounded">
                                delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{--    {{ $users->links() }}--}}
    </div>
@endsection
