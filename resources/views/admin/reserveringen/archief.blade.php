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
	@foreach( $bookings as $booking)
	@if (Carbon\Carbon::today()->toDateString() > $booking->date)
		<div class="col-md-12 navbar mt-3">
		<div class="col-md-12 text-right" style="float: right;">
			<form action="/admin/undo/accept/reserveer/{{ $booking->id }}" method="POST" style="display: inline-block;">
			    {{ csrf_field() }}
			    {{ method_field('PUT') }}
			    @csrf

			    <button type="submit" id="btnCad" class="btn btn-info fas fa-minus-square"><br>Undo Accept</button>
			</form>

			<a href="/admin/reserveringen/edit/{{ $booking->id }}" id="btnCad" class="btn btn-warning far fa-edit"><br>Edit</a href="">
			<a href="/admin/reserveringen/delete/{{ $booking->id }}" id="btnCad" class="btn btn-danger fas fa-trash-alt"><br>Delete</a href="">

		</div>
			<div class="col-md-6">
				<table class="table text-center">
					<br>
					<br>
					<h3>Algemeen</h3>
					<tbody>
						<tr>
							<th scope="row">Voor- en achternaam:</th>
							<td>{{ $booking->firstname }} {{ $booking->lastname }}</td>
						</tr>
						<tr>
							<th scope="row">Email:</th>
							<td>{{ $booking->email }}</td>
						</tr>
						<tr>
							<th scope="row">Telefoonnummer:</th>
							<td>{{ $booking->phonenumber }}</td>
						</tr>

					</tbody>
				</table>

				<table class="table text-center">
					<h3>Informatie</h3>
					<tbody>
						<tr>
							<th scope="row">Datum:</th>
							<td>{{ Carbon\Carbon::parse($booking->date)->format('d-m-Y') }}</td>
						</tr>
						<tr>
							<th scope="row">Dagdeel:</th>
							<td>{{ $booking->dagdeel }}</td>
						</tr>
						<tr>
							<th scope="row">Vergaderuimte:</th>
							<td>{{ $booking->vergaderruimte }}</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-md-6">
				<h3>Omschrijving</h3>
				{{ $booking->description }}
			</div>
			<br>
	</div>
	@endif
	 @endforeach 
</div>
</div>

@endsection













