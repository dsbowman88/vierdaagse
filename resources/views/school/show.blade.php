@extends('layout')

@section('content')
<h1>School: {{ $school->schoolname }}</h1><br>
<h3>Aantal deelnemers: {{ $school->group_size }}</h3>
<h3>Afstand: {{ DB::table('tours')->where('id', $school->tour_id)->value('distance') }} KM</h3>
<h3>Contact: {{ $school->contact }}</h3>
<h3>Email: {{ $school->email }}</h3>
<h3>Telefoon: {{ $school->phonenumber }}</h3>

<button class="btn btn-info"><a class="text-dark font-weight-bold" href="/runner/{{$school->id}}/edit">Edit</a></button>

@endsection
