@extends('layout')

@section('content')
<h1>Deelnemer: {{ $participant->name }}</h1>
<h3>Email: {{ $participant->email }}</h3>
<h3>Afstand: {{ DB::table('tours')->where('id', $participant->tour_id)->value('distance') }} KM</h3>


<button class="btn btn-info"><a class="text-dark font-weight-bold" href="/participant/{{$participant->id}}/edit">Edit</a></button>

@endsection
