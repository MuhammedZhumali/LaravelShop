<ul>
@foreach($items as $item)
    <li><a href="{{ $item->url }}">{{ $item->name }}</a></li>
@endforeach
</ul>