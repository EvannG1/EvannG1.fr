<article>
    <div class="row">
        <div class="two columns">
            <a href="{{ $schoolWebsite }}" target="_blank" rel="noreferrer noopener">
                <img class="image" src="{{ url("storage/$degreeImage") }}" alt="{{ $schoolName }}">
            </a>
        </div>

        <div class="ten columns project">
            <p class="name">
                <i class="fas fa-graduation-cap"></i>
                {{ $name }}
            </p>
            <p class="content">
                {!! $description !!}
            </p>
            <div class="row">
                <div class="seven columns">
                    <p>
                        <i class="fas fa-map-marker-alt"></i>
                        <a class="website" href="{{ $schoolWebsite }}" target="_blank" rel="noreferrer noopener">
                            {{ $schoolName }}
                        </a>
                    </p>
                </div>
                <div class="five columns">
                    <p class="date">
                        <i class="far fa-calendar-alt"></i>
                        From {{ \Carbon\Carbon::parse($startDate)->format('d/m/Y') }} to {{ \Carbon\Carbon::parse($endDate)->format('d/m/Y') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</article>
