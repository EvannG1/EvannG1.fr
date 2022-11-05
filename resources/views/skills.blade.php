@extends('layouts.layout')

@section('content')
    <p class="title">Skills</p>
    <p>You will find below the main development languages, frameworks, technologies that I use on a daily basis and
        the languages that I speak. This is a non-exhaustive list. A complete list is available on my <a
            class="linkedin" href="https://www.linkedin.com/in/evanngehin/" target="_blank"
            rel="noreferrer noopener">Linkedin profile</a>.
    </p>
    @foreach($categories as $category)
        <section id="{{ \Str::slug($category->name) }}">
            <p class="title">
                {{ $category->name }}
            </p>
            <div class="row">
                @foreach($category->skills as $skill)
                    <x-skill
                        :name="$skill->name"
                        :image="$skill->image"
                    />
                @endforeach
            </div>
        </section>
    @endforeach
@endsection
