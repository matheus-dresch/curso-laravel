<x-layout title="Nova Série">

    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="name" class="form-control" autofocus
                    value="{{ old('nome') }}">
            </div>
            <div class="col-2">
                <label for="seasonsQty" class="form-label">Nº de temporadas:</label>
                <input type="number" id="seasonsQty" name="seasonsQty" class="form-control">
            </div>
            <div class="col-2">
                <label for="episodesPerSeason" class="form-label">EPs por temporada:</label>
                <input type="number" id="episodesPerSeason" name="episodesPerSeason" class="form-control">
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

</x-layout>
