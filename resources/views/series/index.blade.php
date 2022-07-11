<x-layout title="Séries">
    <a class="btn btn-primary mb-2" href="/series/create">Adicionar série</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>
