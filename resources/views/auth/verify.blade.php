@extends('layouts.app')

@section('content')
<div class="img-verf">
    <div class="container">
        <div class="row f justify-content-center">
            <div class="justify-content-center col-md-5 col-sm-12 fix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Verifieer je email adres ') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Er is opnieuw een mail verstuurd dit kan 5 min duren') }}
                                </div>
                            @endif

                            {{ __('Voordat je door kan moet je eerst je mail verifiëren ') }}
                            <br>

                            {{ __('Het kan 5 minuten duren. Kunt je de mail niet vinden zoek dan in uw mail naar ijverig ') }}
                            <br>

                            <br>
                            {{ __('Opnieuw mail versturen') }}, <a href="{{ route('verification.resend') }}">{{ __('klik hier') }}</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
