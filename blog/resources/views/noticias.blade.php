@extends('app')

@section('content')

  @if (count($noticias) > 0)

    @foreach ($noticias as $noticia)
    <article>
      <h2>{{ $noticia->titulo }}</h2>
      <div class="article-info">
        <span>{{ $noticia->created_at->format('d/m/Y') }}</span>
      </div>
      <div class="article-content">
        <p>{{ $noticia->texto }}</p>
      </div>
      <div class="article-buttons">
        <a href="{{ url('noticia/'.$noticia->id) }}" class="btn btn-primary pull-right">Leia mais</a>
      </div>
    </article>
    @endforeach

    {{ $noticias->links() }}

  @endif

@endsection