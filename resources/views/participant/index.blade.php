@extends('layout')
@section('content')

<h1 class="">Deelnemers</h1>
<div class="list-group">
<ul>
    <?php $participants=App\participant::all() ?>
    @foreach ($participants as $participant)
    <li>
        <a class="list-group-item list-group-item-action list-group-item-primary" href="/participant/{{ $participant->id }}">{{ $participant->naam }}
        <span class="text-secondary">Afstand: {{ $participant->afstand }} KM</span></a>
    </li>
    @endforeach
</ul>
</div>
@endsection
