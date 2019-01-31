@extends('layout')

@section('content')
    <h1>Inschrijven Deelnemer</h1>
    <form action="/participant" method="post">
            @csrf
        <label for="naam" class="label">Naam:</label>
        <input type="text" name="name" class="form-control shadow {{$errors->has('naam') ? 'border-danger' : ''}}" placeholder="Naam Runner" value="{{ old('naam') }}"><br>
        <label for="email" class="label">Email:</label>
        <input type="text" name="email" class="form-control shadow {{$errors->has('email') ? 'border-danger' : ''}}"placeholder="Email" value="{{ old('email') }}"><br>
        <label for="tour_id" class="label">Afstand:</label>
        <select class="shadow form-control" name="tour_id">
            <option value="1">5 KM</option>
            <option value="2">10 KM</option>
            <option value="3">15 KM</option>
        </select><br>
        <button class="btn btn-info shadow" type="submit">Submit</button><br>
        @include('error')
    </form>
@endsection
