@extends('layouts.slider')

@section('main')

<h2>Ajouter un cours</h2>

{{ Form::open(array('route' => 'courses.store')) }}
	<ul>
        <li>
            {{ Form::label('name', 'Nom:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('horraire', 'Horraires:') }}
            {{ Form::textarea('horraire') }}
        </li>

        <li>
            {{ Form::label('price', 'Prix:') }}
            {{ Form::textarea('price') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
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


