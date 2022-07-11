<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">{{ $mensagemSucesso }}</div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between">
                {{ $serie->nome }}

                <div>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            X
                        </button>
                    </form>
                    <form action="{{ route('series.edit', $serie->id) }}" method="get">
                        <button class="btn btn-primary btn-sm">Editar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
