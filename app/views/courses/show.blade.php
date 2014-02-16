@extends('layouts.slider')

@section('main')

<h2>{{{$course->name}}}</h2>

    @if(Auth::check())
        <p class="ad">
            <a class="sc" href="{{route('courses.edit', $course->id)}}" title="modifier {{{ $course->name }}}"><span>Modifier</span>{{ HTML::image("img/cog2.png") }}</a>
        </p>
    @endif
<div class="fiche">
    
    <h3>Description</h3>
    <p>{{ $course->description }}</p>
    <h3>Horaires</h3>
    <p>{{ $course->horraire }}</p>
    <h3>Cotisation</h3>
    <p>{{ $course->price }}</p>
    @if($course->name === 'Compétition')
        <h3>Compétitions</h3>
        <a href="{{route('results.index')}}">&rarr;Voir les résultats des compétitions</a>
    @endif
</div>

@stop
