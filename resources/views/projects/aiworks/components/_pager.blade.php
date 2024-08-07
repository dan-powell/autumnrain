<div class="Show-pagination {{ $class ?? '' }}">
    <a href="{{ $piece->url }}" class="Show-pagination-link"></a>
    <img class="Show-pagination-img"
        alt="{{ $piece->name }}"
        title="{{ $piece->name }}"
        src="{{ asset(app('image')->crop(400, 400)->url($piece->thumbnail_url)) }}"
        srcset="{{ asset(app('image')->crop(400, 400)->url($piece->thumbnail_url)) }}, {{ asset(app('image')->crop(800, 800)->url($piece->thumbnail_url)) }} 2x"
    />
</div>