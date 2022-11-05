@extends('layouts.layout')

@section('content')
    <section id="about">
        <p class="title">About</p>
        <p class="content">
            President of the <a href="https://alpasso.fr" target="_blank" rel="noreferrer noopener">Alpasso association</a>, self-taught and passionate about web application development and server administration for more than 5 years.<br>
            I'm currently working as a Linux Systems Administrator at <a href="https://gamestream.biz" target="_blank" rel="noreferrer noopener">Gamestream</a>.<br>
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
                <li>CPU : i5-9600KF</li>
                <li>GPU : RTX 2070 Super</li>
                <li>RAM : 32GB (4x8GB) DDR4 - 3000MHz</li>
                <li>SSD NVMe 1TB + SSD 1TB + HDD 1TB</li>
                <li>Motherboard : Gigabyte Z390UD</li>
                <li>Power supply : Seasonic 650W</li>
                <li>Case : Antec NX600</li>
            </div>
            <div id="stuffs" class="six columns">
                <p>Other stuffs :</p>
                <li>Screens : Gigabyte 27" G27QC-A (165Hz)</li>
                <li>Workstation : Materiel.net Bollywood</li>
                <li>Laptop : MacBook Air M2</li>
                <li>Home Server : Dell PowerEdge T320</li>
                <li>Smartphone : iPhone 13 Pro</li>
                <li>Smartwatch : Apple Watch SE</li>
                <li>Headset : HyperX Cloud II</li>
            </div>
        </div>
    </section>
@endsection
