<div class="description">
    @if(strlen($video['description']) > $max_description_length)
        {{ substr($video['description'], 0, $max_description_length) }}
        <div class="hidden">
            {{ substr($video['description'], $max_description_length) }}
        </div>
        <a href="#" class="btn btn-link read-more-link">Read More</a>
    @else
        {{ $video['description'] }}
    @endif
</div>