<li>
    <div class="comment-box">
        <div class="comment-content">
            <h4>{{ $child->name }}</h4>
            <span>{{ \Carbon\Carbon::parse($child->created_at)->translatedFormat('j F Y') }}</span>
            <a href="javascript:void(0)" data-id="{{ $child->id }}"
               class="replyComment">Cevapla</a>
            <p>{{ $child->message }}</p>
        </div>
    </div>
    @if (count($child->children) > 0)
        <ul class="depth">
            @foreach($child->children as $child)
                @include('front.layouts.comments_children', ['child' => $child])
            @endforeach
        </ul>
    @endif
</li>
