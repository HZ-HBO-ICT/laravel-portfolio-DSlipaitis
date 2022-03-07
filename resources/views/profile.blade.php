@extends('layout')

@section('content')
<main>
    <div class="page_content">
        <h1>
            My Profile
        </h1>
        <h2>Personal Information</h2>
        <ol class="a">
            <li>Full Name: Daivaras Šlipaitis</li>
            <li>Contact number: +447565878603</li>
            <li>Email Address:<a href=mailto: daivarasslipaitis@outlook.comsubject="HTML link">
                    daivarasslipaitis@outlook.com</li></a>
            <li>Age: 25</li>
        </ol>/
        <h2>About Me</h2>
        <p class="column">
            As mentioned before on the home page I have grown up in Lithuania and around 19 years old I have moved away
            to Birmingham in United Kingdom, I have stayed there 6 years before coming to study at HZ. On my free time I
            love to be outdoors,
            working out or just spending time with friends. I have already got my favourite spot in Vlissingen park where I
            go for a jog nearly every single day.
            On other hand I am an adrenaline junkie and love some challanges, below you can see a video of me jumping from
            17 meters height cliff in Bali, Indonesia. Additionally to that
            I love to surf, however the surroundings to do that where not in my favour in the past, but now I am super
            excited as I will be able to surf in Autumn and Winter months at Domburg.
        <div>
            <video width="620" height="420" controls src=../img/video.mp4></video>
        </div>
        </p>
    </div>
</main>
@endsection
