<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
<div class="container">
    <h1>Edit</h1>
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
        <button class="btn btn-primary btn-lg" type="submit">Update</button>
    </form>
</div>
