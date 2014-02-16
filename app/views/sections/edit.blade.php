@extends('layouts.slider')

@section('main')

<h2>Modifier "{{{$section->name}}}"</h2>
{{ Form::model($section, array('method' => 'PATCH', 'route' => array('sections.update', $section->id))) }}

    <div class="formInfo">
        <p>Vous pouver utiliser la balises &lt;/br&gt; pour passer à la ligne.</p>
        <p>Vous pouver égualement utiliser la balise &lt;a&gt;&lt;/a&gt; pour les liens sans omettre les attributs.</p>
        <p>Exemple: &lt;a title="description du lien" href="le lien"&gt;Nom du lien&lt;/a&gt;</p>
        <p>Exemple concret: &lt;a title="Google" href="google.be"&gt;Google&lt;/a&gt;</p>
    </div>
    
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
			{{ Form::submit('Modifier', array('class' => 'btn btn-info')) }}
			{{ link_to_route('sections.show', 'Annuler', $section->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
