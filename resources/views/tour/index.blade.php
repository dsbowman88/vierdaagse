@extends('layout')
@section('content')

<h1 class="">Tours</h1>
<div class="list-group">
<ul>
    <?php
        $tours=App\Tour::all()
    ?>
    @foreach ($tours as $tour)
    <li>
        <a class="list-group-item list-group-item-action list-group-item-primary" href="/tour/{{ $tour->id }}">{{ $tour->distance }}
        <span class="text-secondary">Afstand: {{ DB::table('tours')->where('id', $tour->id)->pluck('distance') }} KM</span></a>
    </li>
    @endforeach
</ul>
</div>
@endsection
