<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
<div class="container">
    <h1>新規登録画面</h1>
    <a class="btn btn-primary btn-lg" href="{{ route('user.index') }}" role="button">User All</a>
    <form method="POST" action="{{route('user.store')}}">
        @csrf

        <div>
            <label for="form-name">Name</label>
            <input type="text" name="name" id="form-name" class="form-control" required>
        </div>
        <div>
            <label for="form-pass">birthday</label>
            <input type="date" name="birthday" id="form-birthday" class="col-form-label form-control">
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
