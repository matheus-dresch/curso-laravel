<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">{{ $mensagemSucesso }}</div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between">
                <a href="{{ route('seasons.index', $serie->id) }}">
                    {{ $serie->name }}
                </a>

                <span class="d-flex">
                    <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            X
                        </button>
                    </form>
                    <a href="{{ route('series.edit', $serie->id) }}" method="get" class="btn btn-primary btn-sm ms-3">Editar</a>
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
