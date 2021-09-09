<head>
    <title>Laravel test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

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
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>edit</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>edit</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>edit</td>
        <td>@mdo</td>
    </tr>
    </tbody>
</table>

<a href="{{ route('user.create') }}">新規</a>
{{--<a href="{{ route('user.index') }}">一覧</a>--}}


{{--<form method="post" action="/users/{$data->id}">--}}
{{--    <input name="_method" type="hidden" value="PUT">--}}
{{--    <input type="text" name="name" />--}}
{{--    <input type="submit" />--}}
{{--</form>--}}
