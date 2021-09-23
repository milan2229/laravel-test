@extends('layout.layout')

<div class="container">
    <h1>新規登録画面</h1>
    <a class="btn btn-warning btn-lg" href="{{ route('user.index') }}" role="button">User All</a>
    <form method="POST" action="{{route('user.store')}}">
        @csrf
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <div>
            <label for="form-name">Name</label>
            <input type="text" name="name" id="form-name" class="form-control" required>
        </div>
        <div>
            <label for="form-pass">birthday</label>
            <input type="date" name="birthday" id="form-birthday" value="{{ old('birthday') }}" class="col-form-label form-control">
        </div>
        <div>
            <label for="form-email">メールアドレス</label>
            <input type="email" name="email" id="form-email" class="form-control">
        </div>
        <div>
            <label for="form-cool">Is cool</label>
            <input type="checkbox" value="1" name="cool" id="form-cool">
        </div>
        <button class="btn btn-primary btn-lg" type="submit">NEW</button>

    </form>
</div>
