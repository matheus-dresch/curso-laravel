<x-layout title="Nova Série">
    <form action="{{ route('series.update', $series->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="nome" class="form-label">Novo nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
