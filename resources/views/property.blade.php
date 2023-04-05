@extends('layouts.master')

@section('content')
<section>
    <header>
        <h2>
            {{ $property->location ? $property->location . ', ' : '' }}{{ $property->city->name ?? '' }}
        </h2>
    </header>

    <article class="property-details">
        <img src="{{ asset($property->image ? 'storage/images/'. $property->image : "images/no-image.png")}}">
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
                <div>
                    <span>Year built:</span>
                    <span>{{ $property->year ?? 'N/A' }}</span>
                </div>
                <div>
                    <span>Description:</span>
                    <span>{{ $property->description ?? 'N/A' }}</span>
                </div>
                <div>
                    <span>Type:</span>
                    <span>{{ $property->type->name ?? 'N/A' }}</span>
                </div>
                <div>
                    <span>Amenities:</span>
                    <span>
                        @foreach($property->amenities as $amenity)
                            <span class="badge bg-secondary">{{$amenity->name ?? ''}}</span>
                        @endforeach
                    </span>
                </div>
                <div>
                    <span>Agent:</span>
                    <span>{{ $property->agent->fullName ?? 'N/A' }}</span>
                </div>
            </div>
        </div>
    </article>
</section>

<section>
    @if (!$property->images->isEmpty()))
    <header>
        <h2>
            Gallery
        </h2>
    </header>
    <div class="game-cards">
        @foreach ($property->images as $image)
        <article class="game-card">
            <header>
                <img src="{{ asset($image->name ? 'storage/images/'. $image->name : "images/no-image.png")}}">
            </header>
        </article>
        @endforeach

    </div>
    @endif

    <footer>
        <a class="btn btn-lg btn-outline-secondary" role="button" href="/properties">See other properties</a>
    </footer>
</section>
@stop
