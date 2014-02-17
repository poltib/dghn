@extends('layouts.scaffold')

@section('content')
        
        <iframe width="960" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=207742455035938434065.0004e6be4db2daccc62af&amp;ie=UTF8&amp;t=m&amp;ll=50.631756,5.473627&amp;spn=0.002314,0.010289&amp;z=17&amp;iwloc=0004e6be4f2ace5e9446a&amp;output=embed"></iframe><br /><small>Afficher <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=207742455035938434065.0004e6be4db2daccc62af&amp;ie=UTF8&amp;t=m&amp;ll=50.631756,5.473627&amp;spn=0.002314,0.010289&amp;z=17&amp;iwloc=0004e6be4f2ace5e9446a&amp;source=embed" style="color:#0000FF;text-align:left">Piscine de Grâce-Hollogne</a> sur une carte plus grande</small>
        
        <aside id="nouv">
                <ul class="nouveaute">
                    <li><h2><a title="Lister les annonces" href="{{route('announces.index')}}">Annonces</a></h2></li>
                    <li>
                        <h3>Rejoignez-nous sur facebook</h3>
                        <p>
                        <div class="fb-like" data-href="http://www.facebook.com/DauphinGraceHollogneNatation" data-width="310" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                        </p>
                    </li>
                    @foreach ($announces as $announce)
                        <li>
                        <h3>{{{$announce->nom}}}</h3>
                        <p>{{$announce->annonce}}</p>
                        <span>Posté le:</span>
                    </li>
                    @endforeach
                </ul>
        </aside>
        <section id="content">

            @yield('main')
            
        </section>


@stop