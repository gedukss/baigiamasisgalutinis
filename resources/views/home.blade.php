@extends('layouts.master')

@section('content')
<section>
    <header>
        <h2>
            Featured properties
        </h2>
    </header>

    <div class="game-cards">
        @foreach ($properties as $property)
            <a href="{{ route('property', $property->id) }}">
                <article class="game-card game-card-hover">
                    <header>
                        <img src="{{ asset($property->image ? 'storage/images/'. $property->image : "images/no-image.png")}}">
                        <h3>
                            {{ $property->location ? $property->location . ', ' : '' }}{{ $property->city->name ?? '' }}
                        </h3>
                    </header>
                    <div class="game-card-body">
                        <div class="game-card-details">
                            <div>
                                <span>Price:</span>
                                <span>@if ($property->price) @money($property->price) @else {{ 'N/A' }} @endif</span>
                            </div>
                            <div>
                                <span>Bedrooms:</span>
                                <span>{{ $property->bedrooms ?? 'N/A' }}</span>
                            </div>
                            <div>
                                <span>Bathrooms:</span>
                                <span>{{ $property->bathrooms ?? 'N/A' }}</span>
                            </div>
                            <div>
                                <span>Size:</span>
                                <span>{{ $property->size ? $property->size . ' m²' : 'N/A' }}</span>
                            </div>
                        </div>
                    </div>
                </article>
            </a>
        @endforeach
    </div>
    <footer>
        <a class="btn btn-lg btn-outline-secondary" role="button" href="/properties">View all</a>
    </footer>
</section>



<section>
    <header>
        <h2>
            Our agents
        </h2>
    </header>

    <div class="game-cards">
        @foreach ($agents as $agent)
            <article class="game-card">
                <header>
                    <img src="{{ asset($agent->image ? 'storage/images/'. $agent->image : "images/no-agent.png")}}">
                    <h3>
                        {{ $agent->fullName ?? '' }}
                    </h3>
                </header>
                <div class="game-card-body">
                    <div class="game-card-details">
                        <div>
                            <span>Phone:</span>
                            <span>{{ $agent->phone ?? '' }}</span>
                        </div>
                        <div>
                            <span>Email:</span>
                            <span>{{ $agent->email ?? '' }}</span>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach

    </div>
    <footer>
        <a class="btn btn-lg btn-outline-secondary" role="button" href="/agents">View all</a>
    </footer>
</section>
@stop
