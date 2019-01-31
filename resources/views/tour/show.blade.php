@extends('layout')

@section('content')
<?php
    $participants = App\Participant::all();
?>

<h1>Tour: {{ $tour->distance }} KM</h1>
<h3>Deelnemers:</h3> <br>
@foreach ($participants as $participant)
    <a class="list-group-item list-group-item-action list-group-item-primary" href="/participant/{{ $participant->id }}">{{ $participant->name }}
    <span class="text-secondary">Afstand: {{ $tour->distance }} KM</span></a>
@endforeach


@endsection
