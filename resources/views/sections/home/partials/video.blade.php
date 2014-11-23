<div class="row video-col">
    <div class="col-md-7 video-embed-col">
        <div class="embed">

            <iframe type="text/html"
                    frameborder="0"
                    allowfullscreen="true"
                    src="http://www.youtube.com/embed/{{ $video['id'] }}"
                    class="video-iframe"
                    width="640"
                    height="360">
            </iframe>

        </div>
    </div>
    <div class="col-md-5 video-details-col">

        <h3>{{ $video['title'] }}</h3>
        <p class="author">{{ $video['author'] }}</p>

        <div class="stats">
            <span><i class="fa fa-calendar"></i> {{ $video['date'] }}</span>
            <span><i class="fa fa-eye"></i> {{ $video['stats']['views'] }}</span>
            <span><i class="fa fa-thumbs-o-up"></i> {{ $video['stats']['likes'] }}</span>
        </div>
        {{--<div class="stats">--}}
            {{--<span><i class="fa fa-tags"></i>--}}
                {{--<a href="">tags</a>--}}
                {{--<a href="">should</a>--}}
                {{--<a href="">go</a>--}}
                {{--<a href="">here</a>--}}
            {{--</span>--}}
        {{--</div>--}}

        <div class="description">
            {{ substr($video['description'], 0, $max_description_length) }}
            ...
        </div>

        <div class="actions">
            <button class="btn btn-default"><i class="fa fa-plus"></i> Add to my library</button>
            <button class="btn btn-default"><i class="fa fa-heart"></i> Favorite this video</button>
        </div>

    </div>
</div>