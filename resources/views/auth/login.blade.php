@extends('layouts.app')

@section('content')
<div class="img-register">
<div class="container">
    <div class="row justify-content-center">
        <div class="justify-content-center col-md-5 col-sm-12" style="margin-top: 200px !important;">
            <div class="card background-clean">
                <div class="text-center">
                    <div class="mt-1"><img class="replace" src="/images/logo_ijverig_transparant.png"  height="120"></div>
                    <div class="mt-3"><h1>Inloggen</h1></div>
                </div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="email" placeholder="E-mailadres" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <input id="password" placeholder="Wachtwoord" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-md-6 offset-md-3 text-center">
                                <button type="submit" class="btn-block btn btn-primary">
                                    {{ __('Inloggen') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link none" href="{{ route('password.request') }}">
                                        {{ __('Wachtwoord vergeten?') }}
                                    </a>
                                @endif

				
                                    <a class="btn btn-link none" href="/register">
                                        Maak hier je account
                                    </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
