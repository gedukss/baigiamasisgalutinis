@extends('layouts.master')

@section('content')
<section>
    <header>
        <h2>
            All properties
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
</section>
@stop
