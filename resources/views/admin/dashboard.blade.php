@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
    @if ($first != null)
    	<div class="col-md-8 mt-3">
    		<div class="col-md-12 navbar">
    			<h1 class="text-center">De eerst volgende reservering</h1>
				<div class="col-md-6">
					<table class="table text-center">
						<h3>Klant Details</h3>
						<tbody>
							<tr>
								<th scope="row">Voor- en achternaam:</th>
								<td>{{ $first->firstname }} {{ $first->lastname }}</td>
							</tr>
							<tr>
								<th scope="row">Email:</th>
								<td>{{ $first->email }}</td>
							</tr>
							<tr>
								<th scope="row">Telefoonnummer:</th>
								<td>{{ $first->phonenumber }}</td>
							</tr>

						</tbody>
					</table>

					<table class="table text-center">
						<h3> Verhuur Details</h3>
						<tbody>
							<tr>
								<th scope="row">Datum:</th>
								<td>{{ Carbon\Carbon::parse($first->date)->format('d-m-Y') }}</td>
							</tr>
							<tr>
								<th scope="row">Dagdeel:</th>
								<td>{{ $first->dagdeel }}</td>
							</tr>
							<tr>
								<th scope="row">Vergaderuimte:</th>
								<td>{{ $first->vergaderruimte }}</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-md-6">
					<h3>Omschrijving</h3>
					{{ $first->description }}
				</div>
    		</div>
    	</div>
    	<div class="col-md-4">
    		<div class="col-md-12 navbar text-center mt-3">
    			@if ( $bookings == 1 )
    				<h1> {{ $bookings }} nieuwe reservering </h1>
    			@else
    				<h1> {{ $bookings }} nieuwe reserveringen </h1>
    			@endif
    		</div>
    	</div>
    @else 
    	<div class="col-md-8 mt-3">
    		<div class="col-md-12 navbar mt-3">
    			<h1 class="text-center">Er is nog geen volgende reservering</h1>
    		</div>
    	</div>
    	<div class="col-md-4 mt-3">
    		<div class="col-md-12 navbar text-center mt-3">
    			@if ( $bookings == 1 )
    				<h1> {{ $bookings }} nieuwe reservering </h1>
    			@else
    				<h1> {{ $bookings }} nieuwe reserveringen </h1>
    			@endif
    		</div>
    	</div>
    @endif
    </div>
</div>
@endsection






