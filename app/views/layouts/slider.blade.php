@extends('layouts.scaffold')

@section('content')
        
        <span id="sl_play" class="sl_command">&nbsp;</span>
        <span id="sl_pause" class="sl_command">&nbsp;</span>
        <span id="sl_i1" class="sl_command sl_i">&nbsp;</span>
        <span id="sl_i2" class="sl_command sl_i">&nbsp;</span>
        <span id="sl_i3" class="sl_command sl_i">&nbsp;</span>
        <span id="sl_i4" class="sl_command sl_i">&nbsp;</span>
        <section id="slideshow">
        
            <a class="commands prev commands1" href="#sl_i4" title="Go to last slide">&lt;</a>
            <a class="commands next commands1" href="#sl_i2" title="Go to 2nd slide">&gt;</a>
            <a class="commands prev commands2" href="#sl_i1" title="Go to 1rst slide">&lt;</a>
            <a class="commands next commands2" href="#sl_i3" title="Go to 3rd slide">&gt;</a>
            <a class="commands prev commands3" href="#sl_i2" title="Go to 2nd slide">&lt;</a>
            <a class="commands next commands3" href="#sl_i4" title="Go to 4th slide">&gt;</a>
            <a class="commands prev commands4" href="#sl_i3" title="Go to 3rd slide">&lt;</a>
            <a class="commands next commands4" href="#sl_i1" title="Go to first slide">&gt;</a>
            
            <a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
            <a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
            
            <div class="container">
                <div class="c_slider"></div>
                <div class="slider">
                    <figure>
                        {{ HTML::image("img/slide0.png") }}
                        <figcaption>Les cours sont donnés à la piscine communale de Grâce-Hollogne.</figcaption>
                    </figure><!--
                    --><figure>
                        {{ HTML::image("img/slide1.png") }}
                        <figcaption>Pour les enfants à partir de 3 ans accomplis.</figcaption>
                    </figure><!--
                    --><figure><!--
                    -->{{ HTML::image("img/slide2.png") }}<!--
                    --><figcaption>De l'accoutumance à l'apprentissage des bases de la natation et des différentes nages.</figcaption><!--
                    --></figure><!--
                    --><figure><!--
                    -->{{ HTML::image("img/slide3.png") }}<!--
                    --><figcaption>Et également des scéances d'aquagym et et des cours de nage pour les masters.</figcaption><!--
                    --></figure>
                </div>
            </div>
            <a id="slideInfo" href="http://creativejuiz.fr/trytotry/juizy-slideshow-full-css3-html5/" title="info slider" target=_blank>?</a>
            <span id="timeline"></span>                                             
        </section>
        
        <aside id="nouv">
                <ul class="nouveaute">
                    <li><h2><a title="Lister les annonces" href="{{route('announces.index')}}">Annonces</a></h2></li>
                    <li>
                        <h3>Rejoignez-nous sur facebook</h3>
                        <p>
                        <div class="fb-like" data-href="http://www.facebook.com/DauphinGraceHollogneNatation" data-width="310" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                        </p>
                    </li>
                </ul>
        </aside>
        <section id="content">

            @yield('main')
            
        </section>


@stop