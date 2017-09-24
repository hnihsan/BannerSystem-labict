@extends('layouts.guest')

@section('content')
<div class="container">
  <div class="row">
    <form class="col s6" action="{{ route('login') }}" method="post">
      <div class="card black">
        <div class="card-content">
        {{ csrf_field() }}
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
          <input id="passord" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        <p>
          <input type="checkbox" name="remember" class="filled-in" id="remember_me" />
          <label for="remember_me">Remember Me</label>
        </p>
        </div>
        <div class="card-action center-align">
          <button class="waves-effect waves-teal btn-flat" ><i class="material-icons right"></i>Login</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
