{{--
  ./resources/views/pages/show.blade.php
  Variables disponibles :
    $page OBJ(id, titre, sousTitre, texte, titreMenu, image, created_at, ...)
--}}
@extends('template.index')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{ asset('assets/img/' . $pages->image) }})">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>{{ $pages->titre }}</h1>
            <span class="subheading">{{ $pages->sousTitre }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Textes -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="clearfix">
          {!! html_entity_decode($pages->texte) !!}
        </div>
        {{-- Ici viennent les contenus complémentaires (posts, formulaire, ...) --}}
      </div>
    </div>
  </div>
@endsection
