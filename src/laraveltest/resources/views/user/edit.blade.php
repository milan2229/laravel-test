<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container">
    <h1>Edit</h1>
{{--    <a href="{{ route('user.index') }}">ユーザ一覧</a>--}}
    <a class="btn btn-primary btn-lg" href="{{ route('user.index') }}" role="button">User All</a>
    <form method="POST" action="{{ route('user.update',$user->id) }}">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        @method('PUT')
        <div>
            <label for="form-name">Name</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
        </div>

        <div>
            <label for="form-pass">birthday</label>
            <input type="date" name="birthday" value="{{ $user->birthday }}" class="form-control">
        </div>

        <div>
            <label for="form-email">メールアドレス</label>
            <input type="email" name="email" value="{{ $user->email }}" class="col-form-label form-control">
        </div>
        <div>
            <label for="form-cool">Is cool</label>
            <input type="checkbox" name="cool" value="1" class="form-check-input">
        </div>
{{--        <div class="form-check">--}}
{{--            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>--}}
{{--            <label class="form-check-label" for="flexCheckChecked">--}}
{{--                Checked checkbox--}}
{{--            </label>--}}
{{--        </div>--}}
{{--        <input type="hidden" name="_method" value="patch">--}}
        <button class="btn btn-primary btn-lg" type="submit">Update</button>
    </form>
</div>
