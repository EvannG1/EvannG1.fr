@extends('layouts.layout')

@section('content')
    <section id="about">
        <p class="title">About</p>
        <p class="content">
            Former President of the <a href="https://alpasso.fr" target="_blank" rel="noreferrer noopener">Alpasso association</a>, self-taught and passionate about web application development and server administration for more than 10 years.<br>
            I'm currently working as a Linux System Administrator at <a href="https://miratlas.com" target="_blank" rel="noreferrer noopener">Miratlas</a>.<br>
        </p>
    </section>

    <section id="projects">
        <p class="title">Latest projects</p>
        @foreach($projects as $project)
            <x-project
                :name="$project->name"
                :date="$project->date"
                :link="$project->link"
                :description="$project->description"
            />
        @endforeach
    </section>

    <section id="equipments">
        <p class="title">Equipments</p>
        <div class="row">
            <div id="hardware" class="six columns">
                <p>Primary computer hardware :</p>
                <li>CPU : i7-13700KF @5.4GHz</li>
                <li>GPU : RTX 4080</li>
                <li>RAM : 32GB (2x16GB) DDR5 - 5200MHz</li>
                <li>SSD NVMe 2TB + SSD NVMe 1TB</li>
                <li>Motherboard : B760 GAMING PLUS WIFI</li>
                <li>Power supply : M.RED ATX 1050W</li>
                <li>Case : M.RED ELITE BLACK Rainbow ARGB</li>
            </div>
            <div id="stuffs" class="six columns">
                <p>Other stuffs :</p>
                <li>Screens : Gigabyte 27" G27QC-A (2K @165Hz)</li>
                <li>Workstation : MacBook Air M2 (16GB RAM & 512GB SSD)</li>
                <li>Laptop : MacBook Air M2 (8GB RAM & 256GB SSD)</li>
                <li>Home Server : Dell PowerEdge T320</li>
                <li>Smartphone : iPhone 15 Pro</li>
                <li>Smartwatch : Apple Watch SE</li>
                <li>Headset : HyperX Cloud II</li>
            </div>
        </div>
    </section>
@endsection
