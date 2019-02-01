@extends('layout')

@section('content')

	<h1 class="title">Edit a School</h1>

    <form method="post" action="/school">
		{{ csrf_field() }}

		<div class="field">

			<label class="label" for="schoolname">School name</label>

			<div class="control">
                <input type="text" class="input" name="schoolname" reqiured>

			</div>

	    </div>
    </form>
