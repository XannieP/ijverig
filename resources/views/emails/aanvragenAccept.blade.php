@component('mail::message')
Beste {{ $data['firstname'] }} {{ $data['lastname'] }},

Bedankt voor de reserveringsaanvraag bij IJverig.

Uw reserveringsaanvraag is geaccepteerd.

# Gegevens

Datum: {{ \Carbon\Carbon::parse($data['date'])->format('d-m-Y')}}
<br>
Dagdeel: {{ $data['dagdeel'] }}
<br>
Vergaderruimte: {{ $data['vergaderruimte'] }}
<br>
@if ($data['description'] != null)
# Beschrijving

{{ $data['description'] }}
@endif

<br>
met vriendelijke groeten,<br><br>
{{ config('app.name') }}
@endcomponent
