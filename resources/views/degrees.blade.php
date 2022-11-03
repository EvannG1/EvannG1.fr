@extends('layouts.layout')

@section('content')
    <section id="degrees">
        <p class="title">Degrees</p>
        @foreach($degrees as $degree)
            <x-degree
                :name="$degree->name"
                :description="$degree->description"
                :degreeImage="$degree->degree_image"
                :schoolName="$degree->school_name"
                :schoolWebsite="$degree->school_website"
                :startDate="$degree->start_date"
                :endDate="$degree->end_date"
            />
        @endforeach
    </section>
@endsection
