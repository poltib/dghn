@extends('layouts.slider')

@section('main')

<h2>Toutes les annonces</h2>

@if ($announces->count())
    @foreach ($announces as $announce)
    	<article class="fiche">
                @if(Auth::check())
                    <p class="ad">
                        <a class="sc" href="{{route('announces.edit', $announce->id)}}" title="modifier {{{ $announce->name }}}"><span>Modifier</span>{{ HTML::image("img/cog2.png") }}</a>
                    </p>
                @endif
                <h3>{{$announce->name}}</h3>

                <p>{{{ $announce->annonce }}}</p>
                {{ Form::open(array('method' => 'DELETE', 'route' => array('announces.destroy', $announce->id))) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            
        </article>
    @endforeach
@else
	Il n'y a pas d'annonces
@endif

@stop
