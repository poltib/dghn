@extends('layouts.slider')

@section('main')

<h2>Ajouter une section</h2>

{{ Form::open(array('route' => 'sections.store')) }}
	<ul>
        <li>
            {{ Form::label('name', 'Nom:') }}
            {{ Form::text('name') }}
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


