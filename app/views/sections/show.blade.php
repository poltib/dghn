@extends('layouts.slider')

@section('main')

<h2>{{{$section->name}}}</h2>

@if ($section->courses->count())
    @foreach ($section->courses as $course)
        <article class="fiche">
            @if(Auth::check())
                <p class="ad">
                    <a class="sc" href="{{route('courses.edit', $course->id)}}" title="modifier {{{ $course->name }}}"><span>Modifier</span>{{ HTML::image("img/cog2.png") }}</a>
                </p>
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
