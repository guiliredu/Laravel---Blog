@extends('app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th>Data</th>
      <th>Título</th>
      <th>Texto</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    @if (count($noticias) > 0)
      @foreach ($noticias as $noticia)

      <tr>
        <td>{{ $noticia->created_at->format('d/m/Y') }}</td>
        <td>{{ $noticia->titulo }}</td>
        <td>{{ $noticia->texto }}</td>
        <td>
          <form action="{{ url('noticia/'.$noticia->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Remover
            </button>
          </form>
        </td>
      </tr>

      @endforeach
    @endif
  </tbody>
</table>

<h2>Adicionar notícia</h2>

{{ Form::open(array('url' => 'noticia', 'files' => true)) }}
  <div class="form-group">
    {{ Form::label('titulo', 'Título da notícia') }}
    {{ Form::text('titulo', '', array('class' => 'form-control', 'required' => true)) }}
  </div>
  <div class="form-group">
    {{ Form::label('texto', 'Texto da notícia') }}
    {{ Form::textarea('texto', '', array('class' => 'form-control', 'required' => true)) }}
  </div>
  <div class="form-group">
    {{ Form::label('imagem', 'Imagem da notícia') }}
    {{ Form::file('imagem', '', array('class' => 'form-control')) }}
  </div>
  <div class="form-group">
    {{ Form::submit('Adicionar', array('class' => 'btn btn-primary pull-right')) }}
  </div>
{{ Form::close() }}

@endsection