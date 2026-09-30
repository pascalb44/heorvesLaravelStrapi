@extends('layouts.app')

@section('content')
@if($type === 'livre')
    <h1>{{ $item['titre'] ?? '' }}</h1>

    {{-- Image de couverture --}}
    <div class="containerImg">
        @if(!empty($item['couverture']))
        <img
            src="http://127.0.0.1:1337{{ $item['couverture']['url'] ?? '' }}"
            alt="{{ $item['couverture']['alternativeText'] ?? 'Couverture du livre' }}"
            class="img"
            style="max-width: 300px; height: auto;">
        @endif
    </div>

    {{-- Résumé --}}
    @if(!empty($item['resume']) && is_array($item['resume']))
        @foreach($item['resume'] as $block)

            @continue(empty($block))

            @if(($block['type'] ?? null) === 'paragraph')
                <p class="fs-5-5">
                    @foreach($block['children'] ?? [] as $child)
                        {{ $child['text'] ?? '' }}
                    @endforeach
                </p>

            @elseif(($block['type'] ?? null) === 'image')
                <div class="containerImg">
                    @if(!empty($block['image']))
                        <img
                            src="{{ $block['image']['url'] ?? '' }}"
                            alt="{{ $block['image']['alternativeText'] ?? 'Image' }}"
                            class="img-fluid"
                            style="max-width: 100%; height: auto; margin: 10px 0;">
                    @endif
                </div>

            @elseif(($block['type'] ?? null) === 'quote')
                <blockquote class="fw-bold my-3">
                    @foreach($block['children'] ?? [] as $child)
                        {{ $child['text'] ?? '' }}
                    @endforeach
                </blockquote>
            @endif

        @endforeach

    @else
        <p>Aucun résumé disponible.</p>
    @endif


    {{-- ENCARt --}}
    @if(!empty($item['encart']))
        <div class="encartResistantes encartAfgha">

            @if(is_array($item['encart']))
                @foreach($item['encart'] as $encartBlock)
                    @continue(empty($encartBlock))

                    @if(($encartBlock['type'] ?? null) === 'paragraph')
                        <p>
                            @foreach($encartBlock['children'] ?? [] as $child)
                                {{ $child['text'] ?? '' }}
                            @endforeach
                        </p>
                    @endif
                @endforeach

            @else
                <p>{{ $item['encart'] }}</p>
            @endif

        </div>
    @endif


@elseif($type === 'auteur')

    <h1>{{ $item['nom'] ?? '' }}</h1>
    <h3>Biographie :</h3>

    @if(!empty($item['biographie']) && is_array($item['biographie']))
        @foreach($item['biographie'] as $block)
            @continue(empty($block))

            @if(($block['type'] ?? null) === 'paragraph')
                <p>
                    @foreach($block['children'] ?? [] as $child)
                        <span class="{{ !empty($child['bold']) ? 'text-bold' : '' }}">
                            {{ $child['text'] ?? '' }}
                        </span>
                    @endforeach
                </p>
            @endif
        @endforeach
    @else
        <p>Aucune biographie disponible.</p>
    @endif

@endif

@endsection