@extends('layouts.map')

@section('main')

<h2>Ajouter Contact</h2>

{{ Form::open(array('route' => 'contacts.store')) }}
	<ul>
        <li>
            {{ Form::label('name', 'Nom:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('first_name', 'Prénom:') }}
            {{ Form::text('first_name') }}
        </li>

        <li>
            {{ Form::label('phone', 'Téléphone:') }}
            {{ Form::text('phone') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('function', 'Fonction:') }}
            {{ Form::text('function') }}
        </li>

		<li>
			{{ Form::submit('Ajouter', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


