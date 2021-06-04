@include('templates.header')

<br/>

<div class="container">

    <div class="row">
        <div class="col">
            <a href="/"><button class="btn btn btn-padrao">Pesquisar novamente</button></a>
        </div>
    </div>

    <br/>

    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    
                  @for ($i = 0; $i < $movies['total_pages']; $i++)
                  <form action="/search-movies" method="GET">
                      
                    <input type="hidden" name="nome_filme" value="{{ $_GET['nome_filme'] }}" />
                    <input type="hidden" name="numero_pagina" value="{{ $i + 1 }}" />

                    <li class="page-item"><button type="submit" class="page-link" href="#">{{ $i + 1 }}</button></li>
                  </form>
                  @endfor
                  
                </ul>
              </nav>
        </div>
    </div> 
    
    <br/>

    <div class="row">
        @forelse ($movies['results'] as $m)
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-filme" style="width: 18rem;">

                    @if ($m['poster_path'] != null)
                        <img src="https://image.tmdb.org/t/p/w500{{ $m['poster_path'] }}" class="card-img-top img-filme" width="286" height="161">
                    @else
                        <img src="{{ url('/imgs/sem-imagem.jpg') }}" class="card-img-top img-filme" width="286" height="161">
                    @endif
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $m['title'] }}</h5>
                        @if (array_key_exists('release_date', $m))
                            <p class="card-text">Data: {{ date('d-m-Y', strtotime($m['release_date'])) }}</p>
                        @else
                            <p class="card-text">Data: Desconhecida</p>
                        @endif
                        <a href="/movie-details/{{ $m['id'] }}" class="btn btn-padrao">Acessar detalhes</a>
                    </div>
                </div>
            </div>
            
        @empty
            <h3>Não há registros!</h3>
        @endforelse
    </div>
</div>


@include('templates.footer')