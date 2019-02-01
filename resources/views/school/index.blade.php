@extends('layout')
@section('content')

<h1 class="">Scholen</h1>
<div class="list-group">
<ul>
    <?php
                $testvalue = DB::table('schools')
                ->selectRaw('SUM(group_size) as tot')
                ->pluck('tot');

echo "waarde:".$testvalue;


        $schools=App\School::all()
    ?>

    @foreach ($schools as $school)

    <li>
        <a class="m-2 list-group-item list-group-item-action list-group-item-primary"
        href="/school/{{ $school->id }}"><b>{{ $school->schoolname }} </b>
        <span class="text-secondary">Tour: {{ DB::table('tours')->where('id', $school->tour_id)->value('distance') }} KM</span>
        <span class="text-secondary">Aantal deelnemers: {{ $school->group_size }}</span>
    </a>
    </li>
    @endforeach
</ul>
</div>
@endsection
