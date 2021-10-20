@extends('layouts.passwords')

@section('content')
<div class="container mt-lg-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <fieldset>
                        <legend class="form-legend blue-text">Confirm Password</legend>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn form-btn">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link forgot-pass" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        </fieldset>
                    </form>
                
        </div>
    </div>
</div>
@endsection
