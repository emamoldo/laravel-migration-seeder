@extends('layouts.app')


<div class="container my-4">
    <h1>Trains:</h1>

    <div class="row row-cols-2">
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
                        Alle ore: {{$train->departure_time}}
                    </p>

                    <p>
                        In Arrivo a: {{$train->arrival_station}}
                    </p>
                    <p>
                        Alle ore: {{$train->arrival_time}}
                    </p>
                </div>
            </div>
        @empty
            <p>No trains available</p>
        @endforelse
    </div>
</div>