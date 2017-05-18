@extends('app')

@section('content')

  @if (count($noticias) > 0)

    @foreach ($noticias as $noticia)
    <article>
      <h2>{{ $noticia->titulo }}</h2>
      <div class="article-info">
        <span>17/05/2017</span>
      </div>
      <div class="article-content">
        <p>{{ $noticia->texto }}</p>
      </div>
      <div class="article-buttons">
        <a href="#" class="btn btn-primary pull-right">Leia mais</a>
      </div>
    </article>
    @endforeach

  @endif

@endsection