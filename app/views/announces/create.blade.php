@extends('layouts.slider')

@section('main')

<h2>Ajouter une annonce</h2>

{{ Form::open(array('route' => 'announces.store')) }}
	<ul>
        <li>
            {{ Form::label('nom', 'Nom:') }}
            {{ Form::text('nom') }}
        </li>

        <li>
            {{ Form::label('annonce', 'Annonce:') }}
            {{ Form::textarea('annonce') }}
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


