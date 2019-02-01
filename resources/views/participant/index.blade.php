@extends('layout')
@section('content')

<h1 class="">Deelnemers</h1>
<div class="list-group">
<ul>
    <?php
        $participants=App\Participant::all();
    ?>
    @foreach ($participants as $participant)
    <li>
        <a class="m-2 list-group-item list-group-item-action list-group-item-primary" href="/participant/{{ $participant->id }}">{{ $participant->name }}
        <span class="text-secondary">Afstand: {{ DB::table('tours')->where('id', $participant->tour_id)->value('distance') }} KM</span></a>
    </li>
    @endforeach
</ul>
</div>
@endsection
