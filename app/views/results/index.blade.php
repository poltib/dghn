@extends('layouts.slider')

@section('main')

<h2>Liste des résultats</h2>

@if ($results->count())
    @foreach ($results as $result)
    	<article class="fiche">
            @if(Auth::check())
                <p class="ad">
                    {{ link_to_route('results.edit', 'Edit', array($result->id), array('class' => 'btn btn-info')) }}
                    {{ Form::open(array('method' => 'DELETE', 'route' => array('results.destroy', $result->id))) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </p>
            @endif
            <h3>
                {{{ $result->name }}}&nbsp;<span>{{{ $result->date }}}</span>
            </h3>

            <a href="{{{ $result->result }}}" target=_blank>{{{ $result->name }}}</a> (fichier pdf)
        </article>
	@endforeach
@else
	There are no results
@endif

@stop
