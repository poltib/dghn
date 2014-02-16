@extends('layouts.slider')

@section('main')

<h2>Ajouter un résultat</h2>

{{ Form::open(array('route' => 'results.store','files' => true)) }}
	<ul>
        <li>
            {{ Form::label('name', 'Nom:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('date', 'Date:') }}
            {{ Form::text('date') }}
        </li>

        <li>
            {{ Form::label('result', 'Résultat:') }}
            {{ Form::file('result') }}
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


