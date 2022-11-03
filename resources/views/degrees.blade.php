@extends('layouts.layout')

@section('content')
    <section id="degrees">
        <p class="title">Degrees</p>

        <x-degree
            name="Professional degree"
            description="Design and integration of Web applications and services for the enterprise."
            schoolName="UIT Nancy Charlemagne - Nancy, France"
            schoolWebsite="https://iut-charlemagne.univ-lorraine.fr/informatique/lp-informatique-ciasie"
            startDate="02/09/2020"
            endDate="31/08/2021"
            degreeImage="https://evanng1.fr/assets/images/degrees/bac3.png"
        />
    </section>
@endsection
