<article>
    <div class="row">
        <div class="two columns">
            <p class="date">{{ $date }}</p>
        </div>
        <div class="ten columns project">
            <p class="title">
                <a href="{{ $link }}" {{ $link !== "#" ? 'target="_blank" rel="noreferrer noopener"' : '' }}>{{ $name }}</a>
            </p>
            <p class="content">
                <span>
                    {!! $description !!}
                </span>
            </p>
        </div>
    </div>
</article>
