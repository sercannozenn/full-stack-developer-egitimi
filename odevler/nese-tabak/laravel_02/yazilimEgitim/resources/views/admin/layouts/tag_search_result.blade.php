@foreach($result as $item)
    <li class="tags-list-item" data-id="{{ $item->id }}"><span>{{ $item->name }}</span></li>
@endforeach
