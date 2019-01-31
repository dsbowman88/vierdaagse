@extends('layout')
@section('content')

<h1 class="">Scholen</h1>
<div class="list-group">
<ul>
    <?php
        $schools=App\School::all()
    ?>

    @foreach ($schools as $school)

    <li>
        <a class="list-group-item list-group-item-action list-group-item-primary"
        href="/school/{{ $school->id }}"><b>{{ $school->schoolname }} </b>
        <span class="text-secondary">Tour: {{ $school->tour_id }}</span>
        <span class="text-secondary">Aantal deelnemers: {{ $school->group_size }}</span>
    </a>
    </li>
    @endforeach
</ul>
</div>
@endsection
