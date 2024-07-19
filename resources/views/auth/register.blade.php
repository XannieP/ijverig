@extends('layouts.app')

@section('content')
<div class="img-register">
<div class="container">
    <div class="row f justify-content-center">
        <div class="col-sm-12 col-md-10 col-lg-6">
            <div class="card fix background-clean">
                <div class="text-center">
                    <div class="mt-1"><img class="replace" src="logo_ijverig_transparant.png"  height="120"></div>
                    <div class="mt-1"><h1>Registreren</h1></div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input placeholder="Bedrijfsnaam (optioneel)" id="bedrijfsnaam" type="text" class="form-control @error('bedrijfsnaam') is-invalid @enderror" name="bedrijfsnaam" value="{{ old('bedrijfsnaam')  }}"   autocomplete="bedrijfsnaam" autofocus>

                                @error('bedrijfsnaam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <input id="voornaam" placeholder="Voornaam*" type="text" class="form-control @error('voornaam') is-invalid @enderror" name="voornaam" value="{{ old('voornaam') }}" required autocomplete="voornaam" autofocus>

                                @error('voornaam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <input id="achternaam" placeholder="Achternaam*" type="text" class="form-control @error('achternaam') is-invalid @enderror" name="achternaam" value="{{ old('achternaam') }}" required autocomplete="achternaam" autofocus>

                                @error('achternaam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <input id="telefoonnummer" placeholder="Telefoonnummer*" type="text" class="form-control @error('telefoonnummer') is-invalid @enderror" name="telefoonnummer" value="{{ old('telefoonnummer') }}" required autocomplete="telefoonnummer" autofocus>

                                @error('telefoonnummer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <input placeholder="E-mail*" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <input id="password" placeholder="Wachtwoord*" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Wachtwoord bevestigen*" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

{{--                         <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div required  class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                @if($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback" style="display:block;"> 
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3 mb-5">
                                <button type="submit" class="btn-block btn btn-primary">
                                    {{ __('Registreer') }}
                                </button>
                            </div>
                        </div>
                    </form>

                        <div class="form-group row mb-5">
                            <div class="col-md-6 offset-md-3 text-center">

                                    <a class="btn btn-link none" href="/register">
                                        Heb je al een account?
                                    </a>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
