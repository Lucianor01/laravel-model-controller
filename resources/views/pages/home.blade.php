@extends('layout.app')

@section('content')
    <section>
        <div class="mb-5 mt-3">
            <h2 class="text-center">Movie</h2>
        </div>
        {{-- @php dd($movies) ;@endphp --}}
        <div class="container mb-2">
            <div class="row">
                @foreach ($movies as $elem)
                    <div class="col-3 mb-3">
                        <div class="card text-bg-info border-primary h-100">
                            <h5 class="card-header">{{ $elem['title'] }}</h5>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-3 text-body-secondary">Titolo Originale:
                                    {{ $elem['original_title'] }}</h6>
                                <p class="card-text mb-2">Nazionalità: {{ $elem['nationality'] }}</p>
                                <p class="card-text mb-2">Data di uscita: {{ $elem['date'] }}</p>
                                <p class="card-text mb-2">Voto: {{ $elem['vote'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
