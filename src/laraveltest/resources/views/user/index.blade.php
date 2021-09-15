<head>
    <title>Laravel test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<div class="container">
<a class="btn btn-primary btn-lg" href="{{ route('user.create') }}" role="button">NEW</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Birthday</th>
        <th scope="col">Email</th>
        <th scope="col">Is Cool?</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->name }}</th>
            <td>{{ $user->birthday }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->iscool }}
            <th><a href="{{ route('user.edit',$user->id) }}" class="btn btn-success">edit</a></th>
            </td>
            <td>
                <form method="POST" action="{{route('user.destroy',$user->id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">削除</button>
            </td>
            </form>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
