@extends('layouts.adminlayouts')
@section('body')
<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
      <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>

      @if (session('status') == 'verification-link-sent')
      <div class="mb-4 font-medium text-sm text-green-600">
          {{ __('A new verification link has been sent to the email address you provided during registration.') }}
      </div>
     @endif
    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div>
              <div class="form-group">
                  <button type="submit" class="btn btn-info btn-block">Resend Verification Email</button>
              </div>
           </div>
          </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="form-group">
                <button type="submit" class="btn btn-info btn-block">Log Out</button>
            </div>
        </form>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->
</div>
@endsection
