@extends('layouts.slider')

@section('main')

<h2>Accueil</h2>

@if ($sections->count())
    <p>Le DGHN vous propose les activités suivantes :</p>
	
	@foreach ($sections as $section)
        <article class="livre">
        @if(Auth::check())
            <p class="ad">
                <a class="sc" href="{{route('sections.edit', $section->id)}}" title="modifier {{{ $section->name }}}"><span>Modifier</span>{{ HTML::image("img/cog2.png") }}</a>
            </p>
        @endif
            <ul>
                <li>
                    <h3>{{ link_to_route( 'sections.show', $section->name, $section->id ) }}</h3>
                </li>
                <li>{{ $section->description }}</li>
                
            </ul>
        </article>
	@endforeach

    <div class="plus" >
        <p>Le DGHN est affilié aux Fédérations Belge et Francophone de natation</p>

        <p>Notre club accèpte les chèques "Sport & Culture" de Sodexho, ainsi que les chèques CPAS.</p>
    </div>
@else
	There are no sections
@endif

@stop
