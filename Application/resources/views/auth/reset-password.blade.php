@extends('layouts.adminlayouts')

@section('body')
<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
      <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>
      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />
      <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="form-group">
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
        </div>

        <!-- Password -->
        <div class="form-group">
            <x-label for="password" :value="__('Password')" />
            <x-input id="password" class="form-control" type="password" name="password" required />
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />
        </div>

        <div class="class="form-group">
            <button type="submit" class="btn btn-info btn-block">Reset Password</button>
        </div>
    </form>
    </div>
</div>

@endsection
