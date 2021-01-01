<div class="search-widget widget">
    <form>
        <input type="search" placeholder="search blog" value="{{ request()->text }}"/>
        <button type="submit">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>
<div class="text-widget widget">
    <h2>About the Creon</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus
        pellentesque mattis. </p>
</div>

<div class="category-widget widget">
    <h2>Kategoriler</h2>
    <ul class="category-list">
        @foreach($category as $item)
            <li>
                <a href="{{ route('blog.category', ['category' => $item->slug]) }}">
                    {{ $item->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

<div class="popular-widget widget">
    <h2>Popular Posts</h2>
    <ul class="popular-list">
        @foreach($popularPost as $popular)
            <li>
                <img alt="{{ $popular->title }}" src="{{asset('storage/'. $popular->image )}}">
                <div class="side-content">
                    <h2>
                        <a href="{{ route('blog.post', ['category' => $popular->getCategory->slug, 'post' => $popular->slug]) }}">
                            {{ $popular->title }}
                        </a>
                    </h2>
                    <span>{{ \Carbon\Carbon::parse($popular->publish_date)->translatedFormat('j F Y') }}</span>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@isset($tags)
    <div class="tags-widget widget">
        <h2>Etiket Bulutu</h2>
        <ul class="tags-list">
            @foreach($tags as $tag)
                <li><a href="#">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
    </div>
@endisset
