@extends('layout')
@section('content')

<h1 class="">Route</h1>
<div class="list-group">
<ul>
    <?php
        $tours=App\Tour::all()
    ?>

    @foreach ($tours as $tour)
    <li>
        <a class="m-2 list-group-item list-group-item-action list-group-item-primary" href="/tour/{{ $tour->id }}">{{ $tour->distance }}
        <span class="text-secondary">Afstand: {{ $tour->distance }} KM</span>
        <span class="text-success">Aantal deelnemers: {{ App\School::ftourTotal($tour->id) }}</span>
        </a>
    </li>
    @endforeach
</ul>
<span class="text-success">Totaal aantal deelnemers: <b>{{App\School::fgroupTotal(0)}}</b></span>
</div>



@endsection
