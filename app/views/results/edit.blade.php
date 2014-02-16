@extends('layouts.slider')

@section('main')

<h1>Modifier "{{{$result->name}}}"</h1>
{{ Form::model($result, array('method' => 'PATCH', 'route' => array('results.update', $result->id))) }}
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
            {{ Form::text('result') }}
        </li>

		<li>
			{{ Form::submit('Modifier', array('class' => 'btn btn-info')) }}
			{{ link_to_route('results.show', 'Annuler', $result->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
