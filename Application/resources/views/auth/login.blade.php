@extends('layouts.adminlayouts')

@section('body')

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
      <div class="tx-center mg-b-60">The Admin Template For Perfectionist</div>
       <!-- Session Status -->
       <x-auth-session-status class="mb-4" :status="session('status')" />

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />
      <form method="POST" action="{{ route('login') }}">
        @csrf
      <!-- Email Address -->
      <div class="form-group">
        <x-label for="email" :value="__('Email')" />
        <x-input id="email" class="form-control" type="email" placeholder="Enter Your Email" name="email" :value="old('email')" required autofocus />
    </div>

      <!-- Password -->
      <div class="form-group">
        <x-label for="password" :value="__('Password')" />
        <x-input id="password" class="form-control" type="password" placeholder="Enter Your Password"  name="password" required autocomplete="current-password" />
      </div>
      <button type="submit" class="btn btn-info btn-block">Sign In</button>
      </form>


      <div class="mg-t-60 tx-center">Forgot Password? <a href="{{route('password.request')}}" class="tx-info">Reset Your Password</a></div>
      <div class="tx-center">Not yet a member? <a href="{{route('register')}}" class="tx-info">Sign Up</a></div>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->
@endsection
