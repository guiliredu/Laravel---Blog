@extends('app')

@section('content')

    <article>
      <h2>{{ $noticia->titulo }}</h2>
      <div class="article-info">
        <span>17/05/2017</span>
      </div>
      <div class="article-content">
      	<img src="{{ asset('img/'.$noticia->imagem) }}" alt="">
        <p>{{ $noticia->texto }}</p>
      </div>
    </article>

@endsection