@extends('layouts.layout')

@section('content')
    <section id="experiences">
        <p class="title">Professional Experiences</p>
        @foreach($experiences as $experience)
            <x-experience
                :name="$experience->name"
                :description="$experience->description"
                :city="$experience->city"
                :startDate="$experience->start_date"
                :endDate="$experience->end_date"
                :companyLogo="$experience->company_logo"
                :companyWebsite="$experience->company_website"
            />
        @endforeach
    </section>
@endsection
