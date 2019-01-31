@extends('layout')

@section('content')
    <h1>Inschrijven Deelnemer</h1>
    <form action="/runner" method="post">
            @csrf
        <label for="naam" class="label">Naam:</label>
        <input type="text" name="name" class="form-control shadow {{$errors->has('naam') ? 'border-danger' : ''}}" placeholder="Naam Runner" value="{{ old('naam') }}"><br>
        <label for="email" class="label">Email:</label>
        <input type="text" name="email" class="form-control shadow {{$errors->has('email') ? 'border-danger' : ''}}"placeholder="Email" value="{{ old('email') }}"><br>
        <label for="afstand" class="label">Afstand:</label>
        <select class="shadow form-control" name="distance">
            <option value="5">5 KM</option>
            <option value="10">10 KM</option>
            <option value="15">15 KM</option>
        </select><br>
        <button class="btn btn-info shadow" type="submit">Submit</button><br>
        @include('error')
    </form>
@endsection
