@extends('layout')
@section('content')

<h1 class="">Scholen</h1>
<div class="list-group">
<ul>
    <?php $schools=App\school::all() ?>
    @foreach ($schools as $school)
    <li>
        <a class="list-group-item list-group-item-action list-group-item-primary" href="/school/{{ $school->id }}">{{ $school->schoolname }}
        <span class="text-secondary">Contactpersoon: {{ $school->contact }}</span></a>
    </li>
    @endforeach
</ul>
</div>
@endsection
