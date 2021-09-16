<head>
    <title>Laravel test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
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
