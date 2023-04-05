@extends('layouts.master')

@section('content')
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
</section>
@stop
