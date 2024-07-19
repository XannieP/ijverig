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
                    <form action="/admin/reserveringen/edit/succes/{{ $show->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        @csrf

                        <div class="row form-group">
                            <label for="date" class="col-md-12 col-form-label"> <h2 class="text-center text-dark lll"> Voornaam </h2> </label>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                              <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $show->firstname }}" required autocomplete="firstname" autofocus>

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
                              <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $show->lastname }}" required autocomplete="lastname" autofocus>

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
                              <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $show->email }}" required autocomplete="email" autofocus>

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
                              <input id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ $show->phonenumber }}" required autocomplete="phonenumber" autofocus>

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
                                <input id="date" type="date" class="form-control datepicker-here @error('date') is-invalid @enderror" name="date" value="{{ $show->date }}" required autocomplete="date" autofocus data-position="right top">

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
                                <input id="dagdeel" name="dagdeel" type="text" class="form-control" value="{{ $show->dagdeel }}"  autocomplete="dagdeel" autofocus>
                            </div>
                        </div>

                        <br>

                        <div class="row form-group">
                            <label class="col-md-12 col-form-label"> <h2 class="text-center text-dark lll"> Vergaderruimte </h2> </label>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                                <input id="vergaderruimte" name="vergaderruimte" type="text" class="form-control" value="{{ $show->vergaderruimte }}"  autocomplete="vergaderruimte" autofocus>
                            </div>
                        </div>

                        <br>

                        <div class="row form-group">
                            <label for="beschrijving" class="col-md-12 col-form-label"> <h2 class="text-center text-dark lll"> Beschrijving </h2> </label>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $show->description }}" cols="30" rows="4" autocomplete="description" autofocus>{{ $show->description }}</textarea>

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
                                    {{ __('Bijwerken') }}
                                </button>
                            </div>
                        </div>


                        </form>
            </div>
        </div>
    </div>
</div><
@endsection






