<h1>新規登録画面</h1>
<a href="{{ route('user.index') }}">一覧</a>

<form method="POST" action="{{route('user.store')}}">
@csrf

    <div>
        <label for="form-name">Name</label>
        <input type="text" name="name" id="form-name" required>
    </div>

    <div>
        <label for="form-pass">パスワード</label>
        <input type="text" name="password" id="form-pass">
    </div>

    <div>
        <label for="form-email">メールアドレス</label>
        <input type="email" name="email" id="form-email">
    </div>

    <button type="submit">登録</button>

</form>
