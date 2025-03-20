
  @extends('layouts.app')

  @section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  @endsection
  <!-- お問い合わせフォーム入力ページ -->
    @section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text-n">
              <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('name') }}"/>  
              <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('name') }}"/>
            </div>
            <div class="form__error">
              @error('last_name','first_name')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="label__content">
            <input id="man" type="radio" name="gender" value="1" checked>
            <label for="man" name="gender" value="男性">男性</label>
            <input id="woman" type="radio" name="gender" value="2">
            <label for="woman" name="gender" value="女性">女性</label>
            <input id="non-binary" type="radio" name="gender" value="3">
            <label for="non-binary" name="gender" value="その他">その他</label>
          </div>
          <div class="form__error">
            @error('gender')
            {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
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
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text-t">
              <input type="tel" name="tel" placeholder="080" /> -
              <input type="tel" name="tel" placeholder="1234" /> -
              <input type="tel" name="tel" placeholder="5678" />
            </div>
            <div class="form__error">
              @error('tel')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷千駄ヶ谷1-2-3" />
            </div>
            <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" />
            </div>
            <div class="form__error">
              @error('building')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <select class="create-form__item-select" name="category_id">
            <!-- フォーイーチディレクティブ（＄カテゴリ複数　as　＄カテゴリ）入る -->
            <option type="text" value="">カテゴリ</option>
            <!-- フォーイーチディレクティブ閉じが入る -->
          </select>
          <div class="form__error">
            @error('category_id')
            {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="お問合せ内容をご記載ください"></textarea>
            </div>
            <div class="form__error">
              @error('detail')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
    @endsection
