@include('templates.header')

<br/>

<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="project-info-box mt-0">
                <h5>{{$movie['title']}}</h5>
                <p class="mb-0">{{$movie['overview']}}</p>
            </div><!-- / project-info-box -->

            <div class="project-info-box">
                <p><b>Total de votos:</b> {{ $movie['vote_count'] }}</p>
                <p><b>Nota:</b> {{ $movie['vote_average'] }}</p>
                <p><b>Categorias:</b>  @forelse ($movie['genres'] as $m )
                    @php echo $m['name'] . '.'; @endphp
                 @empty
                     Não há registros.
                 @endforelse</p>
                <p class="mb-0"><b>Orçamento:</b> $ @php echo number_format($movie['budget'], 2) @endphp</p>
            </div><!-- / project-info-box -->

          
        </div><!-- / column -->

        <div class="col-7">
            <a href="{{ $movie['homepage'] }}">
                @if ($movie['backdrop_path'] != null)
                <img src="https://image.tmdb.org/t/p/w500{{ $movie['backdrop_path'] }}" alt="project-image" class="rounded img-filme">
                @else
                <img src="{{ url('/imgs/sem-imagem.jpg') }}" alt="project-image" class="rounded img-filme">
                @endif
            </a>
            <div class="project-info-box">
                <p><b>{{ $movie['tagline']}}</b></p>
                <p>Clique na imagem acima para mais informações</p>
                <p><b>Produção:</b> @forelse ($movie['production_companies'] as $m )
                   @php echo $m['name'] . '.'; @endphp
                @empty
                    Não há registros.
                @endforelse</p>
            </div><!-- / project-info-box -->
        </div><!-- / column -->
    </div>
</div>