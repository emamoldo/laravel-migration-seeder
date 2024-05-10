@extends('layouts.app')


<div class="container my-4">
    <h1>Trains:</h1>

    <div class="row">
        @forelse ($trains as $train)

            <div class="col my-4 text-center">
                <div class="card">
                    <p>
                        {{$train->agency}}
                    </p>

                    <p>
                        In Partenza da: {{$train->departure_station}}
                    </p>
                    <p>
                        Alle ore: {{$train->departure_station}}
                    </p>

                    <p>
                        In Arrivo a: {{$train->arrival_station}}
                    </p>
                    <p>
                        Alle ore: {{$train->arrival_station}}
                    </p>
                </div>
            </div>
        @empty
        @endforelse
    </div>
</div>