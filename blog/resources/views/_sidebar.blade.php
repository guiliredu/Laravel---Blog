<div class="widget">
  <h3>Últimos artigos</h3>
  <ul>
  @if (count($noticias) > 0)
    @foreach ($noticias as $noticia)

    <li><a href="{{ url('noticia/'.$noticia->id) }}">{{ $noticia->created_at->format('d/m') }} - {{ $noticia->titulo }}</a></li>

    @endforeach
  @endif
  </ul>
</div>

<div class="widget">
  <h3>Parceiros</h3>
  <ul>
    <li><a href="http://fatalmodel.com" target="_blank">Fatal Model</a></li>
  </ul>
</div>