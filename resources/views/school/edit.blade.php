@extends('layout')

@section('content')

	<h1 class="title">Edit a School</h1>

    <form method="post" action="/school">
        @csrf
        @method('PATCH')

		<div class="field">
			<label class="label" for="schoolname">School name</label>
			<div class="control">
                <input type="text" class="input" name="schoolname" value="{{ $school->schoolname }}" reqiured>
			</div>
	</div>

	<div class="field">
		<label class="label" for="group_size">Group size</label>
		<div class="control">
			<input type="text" class="input" name="group_size" value="{{ $school->group_size }}">
		</div>
    </div>

    <div class="field">
        <label class="label" for="distance">Afstand:</label>
        <div class="control">
            <select name="tour_id">
                <option value="1">5 KM</option>
                <option value="2">10 KM</option>
                <option value="3">15 KM</option>
            </select>
        </div>
    </div>

	<div class="field">
		<label class="label" for="contact">Contactpersoon</label>
		<div class="control">
			<input type="text" class="input" name="contact" value="{{ $school->contact }}">
		</div>
	</div>

	<div class="field">
		<label class="label" for="email">E-mailadres</label>
		<div class="control">
			<input type="text" class="input" name="email" value="{{ $school->email }}">
		</div>
    </div>

    <div class="field">
		<label class="label" for="phonenumber">Telefoonnummer</label>
		<div class="control">
			<input type="text" class="input" name="phonenumber" value="{{ $school->phonenumber }}">
		</div>
    </div>

    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

    <div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Edit this school</button>
		</div>
	</div>

    {{-- als een error verschijnt, dan pas de error-balk tonen --}}
@if ($errors->any())
	<div class="notification is-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

</form>

@endsection
