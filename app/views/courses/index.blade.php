@extends('layouts.slider')

@section('main')

<h2>Liste des cours</h2>

<p>{{ link_to_route('courses.create', 'Add new course') }}</p>

@if ($courses->count())
	@foreach ($courses as $course)
        <article class="fiche">
            @if(Auth::check())
                <a class="sc" href="{{route('courses.edit', $course->id)}}" title="modifier {{{ $course->name }}}"><span>Modifier</span>{{ HTML::image("img/cog2.png") }}</a>
            @endif

            <h3>{{ link_to_route('courses.show', $course->name, $course->id) }}</h3>

            {{{ $course->description }}}

            {{ link_to_route('courses.show', $course->name, $course->id) }}
        
        </article>
	@endforeach
@else
	There are no courses
@endif

@stop
