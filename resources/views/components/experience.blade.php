<article>
    <div class="row">
        <div class="two columns">
            <a href="{{ $companyWebsite }}" target="_blank" rel="noreferrer noopener">
                <img class="image" src="{{ url("storage/$companyLogo") }}" alt="{{ $name }}">
            </a>
        </div>

        <div class="ten columns project">
            <p class="name">
                <i class="fas fa-briefcase"></i>
                <a class="website" href="{{ $companyWebsite }}" target="_blank" rel="noreferrer noopener">
                    {{ $name }}
                </a>
            </p>
            <p class="content">
                {!! $description !!}
            </p>
            <div class="row">
                <div class="seven columns">
                    <p>
                        <i class="fas fa-map-marker-alt"></i> {{ $city }}
                    </p>
                </div>
                <div class="five columns">
                    <p class="date">
                        <i class="far fa-calendar-alt"></i>
                        From {{ \Carbon\Carbon::parse($startDate)->format('d/m/Y') }} to {{ $endDate !== 'Present' ? \Carbon\Carbon::parse($endDate)->format('d/m/Y') : $endDate }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</article>
