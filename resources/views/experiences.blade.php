@extends('layouts.layout')

@section('content')
    <section id="experiences">
        <p class="title">Professional Experiences</p>

        <x-experience
            name="Gamestream - Permanent contract"
            description="Linux R&D system administrator :
                        - ensure the evolution and improvement of the technical stack (Docker, Nginx, PHP, MySQL, PostgreSQL, ProxySQL, HAProxy, GitLab, CI/CD, Redis...)
                        - ensure deployments, updates and maintenance of customer environments
                        - customer support"
            city="Ludres, France"
            startDate="04/10/2021"
            endDate="today"
            companyLogo="https://evanng1.fr/assets/images/companies/gamestream.jpeg"
            companyWebsite="https://gamestream.biz"
        />
    </section>
@endsection
