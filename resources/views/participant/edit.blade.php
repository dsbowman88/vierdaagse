@extends('layout')
@section('content')
<h1>Wijzig of verwijder inschrijving</h1>
<form method="POST" action="/participant/{{ $participant->id }}">
    @csrf
    @method('PATCH')
    <div class="field">
        <label class="label" for="name">Naam:</label>
        <div class="control">
        <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="text" name="name" value="{{ $participant->name }}">
        </div>
    </div>
    <div class="field">
        <label class="label" for="email">Email:</label>
        <div class="control">
            <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" value="{{ $participant->email }}">
        </div>
    </div>
    <div class="field">
        <label class="label" for="tour_id">Afstand:</label>
        <div class="control">
            <select name="tour_id">
                <option value="1">5 KM</option>
                <option value="2">10 KM</option>
                <option value="3">15 KM</option>
            </select>
        </div>
    </div>
    <div>
        <button class="button is-link" type="submit">Update Inschrijving</button>
    </div>
    @include('error')
</form>
<form action="/participant/{{$participant->id}}" method="post">
    @csrf
    @method('DELETE')
        <button class="button is-danger" type="submit">Verwijder Inschrijving</button>
</form>
@endsection
