@include('templates.header')

    <div class="container">
        <div class="row">
            <div class="col coluna-form">
                <h1 class="text-center">Encontre o filme que deseja!</h1>
                <form action="/search-movies" method="GET" class="form-pesquisa-filme">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome do filme:</label>
                        <input type="text" class="form-control" id="nome_filme" name="nome_filme" placeholder="Ex: Harry Potter" required>

                    </div>

                    <button type="submit" class="btn">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>

@include('templates.footer')