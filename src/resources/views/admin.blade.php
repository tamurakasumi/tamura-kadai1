@extends('layouts.app')

    @section('content')
    <div class="login-form__content">
      <div class="login-form__heading">
        <h2>Admin</h2>
      </div>
      <form class="form" action="/logout" method="post">
      @csrf
      <button class="header-nav__button">logout</button>
      </form>
    </div>
    @endsection