@extends('layout')

@section('content')
<?php
    $participants = App\Participant::all();
    $schools = App\School::all();
?>

<h1>Tour: {{ $tour->distance }} KM</h1>
<h3>Scholen:</h3> <br>
@foreach ($schools as $school)
    @if ($school->tour_id == $tour->id)
        <a class="m-2 list-group-item list-group-item-action list-group-item-success" href="/participant/{{ $school->id }}">{{ $school->schoolname }}
        <span class="text-secondary">Afstand: {{ $tour->distance }} KM</span>
        <span class="text-primary">Aantal Deelnemers: {{ $school->group_size }}</span>
    </a>
    @endif
@endforeach

<h3>Deelnemers:</h3> <br>
@foreach ($participants as $participant)
    @if ($participant->tour_id == $tour->id)
        <a class="m-2 list-group-item list-group-item-action list-group-item-primary" href="/participant/{{ $participant->id }}">{{ $participant->name }}
        <span class="text-secondary">Afstand: {{ $tour->distance }} KM</span></a>
    @endif
@endforeach

@endsection
