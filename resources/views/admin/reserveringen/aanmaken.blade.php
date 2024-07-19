@extends('layouts.sidebar')

@section('content')
<div class="container">
@if (session('success'))
    <div class="alert alert-success" role="alert"> 
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      {{ session('success') }}
    </div>
@endif
<div class="row">
    <div class="col-md-12 mt-3 justify-content-center">
<div class="col-md-12 table-plac res-borders navbar justify-content-center">
                    <form method="POST" action=" {{ route('admin-aanmaken') }} ">
                        @csrf

                        <div class="row form-group">
                            <label for="date" class="col-md-12 col-form-label"> <h2 class="text-center text-dark lll"> Voornaam </h2> </label>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                              <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                              @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <label for="date" class="col-md-12 col-form-label"> <h2 class="text-center text-dark lll"> Achternaam </h2> </label>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                              <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                              @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <label for="date" class="col-md-12 col-form-label"> <h2 class="text-center text-dark lll"> Email </h2> </label>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                              <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                              @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <label for="date" class="col-md-12 col-form-label"> <h2 class="text-center text-dark lll"> Telefoonnummer </h2> </label>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                              <input id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus>

                              @error('phonenumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <label for="date" class="col-md-12 col-form-label"> <h2 class="text-center text-dark lll"> Datum </h2> </label>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                                <input id="date" type="date" class="form-control datepicker-here @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus data-position="right top">

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="row form-group">
                            <label class="col-md-12 col-form-label"> <h2 class="text-center text-dark lll"> Dagdeel </h2> </label>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
 
                              <select name="dagdeel" id="dagdeel"  class="form-control" required autofocu>
                                <option value="ochtend">Ochtend</option>
                                <option value="middag">Middag</option>
                                <option value="avond">Avond</option>
                                <option value="Ochtend + Middag">Ochtend + Middag</option>
                                <option value="Middag + Avond">Middag + Avond</option>
                                <option value="Ochtend + Middag + Avond">Ochtend + Middag + Avond</option>
                              </select>

                            </div>
                        </div>

                        <br>

                        <div class="row form-group">
                            <label class="col-md-12 col-form-label"> <h2 class="text-center text-dark lll"> Vergaderruimte </h2> </label>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
 
                              <select name="vergaderruimte" id="vergaderruimte"  class="form-control" required autofocu>
                                <option value="voorruimte">Voorruimte</option>
                                <option value="achterruimte">Achterruimte</option>
                                <option value="Voorruimte en achterruimte">Voorruimte en achterruimte</option>
                              </select>

                            </div>
                        </div>

                        <br>

                        <div class="row form-group">
                            <label for="beschrijving" class="col-md-12 col-form-label"> <h2 class="text-center text-dark lll"> Beschrijving </h2> </label>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                                <textarea placeholder="Geef hier bijvoorbeeld je tijd door (bijvoorbeeld van 9:00 - 17:00 uur)." id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" cols="30" rows="4" autocomplete="description" autofocus></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-12">
                                <button type="submit" class="mt-3 btn btn-block btn-primary">
                                    {{ __('Aanmaken') }}
                                </button>
                            </div>
                        </div>


                        </form>
            </div>
</div></div></div>
@endsection






