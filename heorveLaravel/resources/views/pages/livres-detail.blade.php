@if($type === 'livre')
<h1>{{ $item['titre'] }}</h1>

<h3>Résumé :</h3>

@foreach($item['resume'] as $block)
@if($block['type'] === 'paragraph')
<p>
    @foreach($block['children'] as $child)
    {{ $child['text'] }}
    @endforeach
</p>
@endif
@endforeach
@endif

@if($type === 'auteur')
<h1>{{ $item['nom'] }}</h1>

<h3>Biographie :</h3>

@if(!empty($item['biographie']) && is_array($item['biographie']))
@foreach($item['biographie'] as $block)
@if($block['type'] === 'paragraph')
<p>
    @foreach($block['children'] as $child)
    {{ $child['text'] }}
    @endforeach
</p>
@endif
@endforeach
@else
<p>Aucune biographie disponible.</p>
@endif
@endif