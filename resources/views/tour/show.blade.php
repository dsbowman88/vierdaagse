@extends('layout')

@section('content')
<?php
    $participants = App\Participant::all();
?>

<h1>Tour: {{ $tour->distance }} KM</h1>
Deelnemers: <br><br>
@foreach ($participants as $participant)
 {{$participant->name}} <br>
@endforeach


@endsection
