@extends('layouts.slider')

@section('main')

<h2>Modifier Annonce</h2>
{{ Form::model($announce, array('method' => 'PATCH', 'route' => array('announces.update', $announce->id))) }}
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
			{{ Form::submit('Modifier', array('class' => 'btn btn-info')) }}
			{{ link_to_route('announces.show', 'Cancel', $announce->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
