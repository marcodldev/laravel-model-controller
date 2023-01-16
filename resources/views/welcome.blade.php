@extends('layouts.app')


@section('contenuto-main')
    <h1>Lista film presenti nel Database:</h1>
    <h2></h2>
    <div class="container">
        <div class="row p-4">
            @foreach ($movies as $elem)
                <div class="col-3 p-2">
                    <div class="card border border-primary border-5 " style="width: 18rem;">
                        <div class="card-body">
                            <h2 class="card-title">{{ $elem['title'] }}</h2>
                            <p class="card-text">Data uscita:{{ $elem['date'] }} <br> Nazionalità:{{ $elem['nationality'] }} <br> 
                                Titolo originale: {{ $elem['original_title'] }}</p>
                            <h3>Voto:{{ $elem['vote'] }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
