<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <h2 class="header__logo">
        FashionablyLate
      </h2>
      <nav>
        <ul class="header-nav">
          <li class="header-nav__item">
            <a class="header-nav__link" href="/register">register</a>
          </li>
        </ul>
       </nav>
    </div>
  </header>

  <main>
    <div class="login-form__content">
      <div class="login-form__heading">
        <h2>Login</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例: test@example.com" />
            </div>
            <div class="form__error">
              @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">パスワード</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text-t">
              <input type="text" name="password" placeholder="例: coachtech1106" />
            </div>
            <div class="form__error">
              @error('password')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">ログイン</button>
        </div>
      </form>
    </div>

  </main>
</body>

</html>
