@extends('layout')

@section('content')
<h1>Runner: {{ $participant->name }}</h1>
<h3>Email: {{ $participant->email }}</h3>
<h3>Afstand: {{ $participant->distance }}</h3>

<button class="btn btn-info"><a class="text-dark font-weight-bold" href="/runner/{{$runner->id}}/edit">Edit</a></button>

@endsection
