@extends('layout.layout')

<div class="container">
    <h1>Edit</h1>
    <a class="btn btn-warning btn-lg" href="{{ route('/') }}" role="button">User All</a>
    <form method="POST" action="{{ route('user.update',$user->id) }}">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        @method('PUT')
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <div>
            <label for="form-name">Name</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
        </div>
        <div>
            <label for="form-pass">birthday</label>
            <input type="date" name="birthday" value="{{ $user->birthday }}" class="form-control">
        </div>
        <div>
            <label for="form-email">email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="col-form-label form-control">
        </div>
        <div>
            <label for="form-cool">Is cool</label>
            <input type="checkbox" name="cool" value="1" class="form-check-input"
                   @if (old('cool', $user->iscool) == 1) checked @endif>
        </div>
        <button class="btn btn-primary btn-lg" type="submit">Update</button>
    </form>
</div>
