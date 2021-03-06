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
        <a class="m-2 list-group-item list-group-item-action list-group-item-primary"
        href="/school/{{ $school->id }}"><b>{{ $school->schoolname }} </b>
        <span class="text-secondary">Route: {{ DB::table('tours')->where('id', $school->tour_id)->value('distance') }} KM</span>
        <span class="text-success">Aantal deelnemers: {{ $school->group_size }}</span>
    </a>
    </li>
    @endforeach
</ul>
</div>
@endsection
