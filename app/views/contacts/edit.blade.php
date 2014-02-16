@extends('layouts.map')

@section('main')

<h2>Modifier "{{{$contact->name}}}"</h2>
{{ Form::model($contact, array('method' => 'PATCH', 'route' => array('contacts.update', $contact->id))) }}
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
			{{ Form::submit('Modifier', array('class' => 'btn btn-info')) }}
			{{ link_to_route('contacts.show', 'Annuler', $contact->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
