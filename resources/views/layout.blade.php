<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../css/style.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Luckiest+Guy&family=Varela+Round&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daivaras-Slipaitis</title>
</head>

<body>
<header>
    <nav>
        <ul class="nav_links">
            <li>
                <h2>Daivaras ┼álipaitis Website</h2>
            </li>
            <li><a class="{{ Request::path() === '/welcome' ? 'active' : '' }}" href="/">Home</a></li>
            <li><a class="{{ Request::path() === 'profile' ? 'active' : '' }}" href="profile">Profile</a></li>
            <li><a class="{{ Request::path() === 'dashboard' ? 'active' : '' }}" href="dashboard">Dashboard</a></li>
            <li><a class="{{ Request::path() === 'faq' ? 'active' : '' }}" href="faq">FAQ</a></li>
            <li><a class="{{ Request::path() === 'index' ? 'active' : '' }}" href="blog">Blog</a></li>
            <img src=../img/logo.png>
        </ul>
    </nav>
</header>
    @yield('content')
<footer>
    <div class="footer-left">
        <ul>
            <li><a href="https://hz.nl/en/study-programmes/it">Course and Examination Regulations</a></li>
            <li><a href="https://hz.nl/uploads/documents/Regelingen/EN/OERS/Uitvoeringsregeling-HZ-OER-IBMS-English.pdf">The Implementation Regulations</a></li>
            <li><a href="https://hz.nl/en/lectureships/onderwijsexcellentie">This Learn Environment</a></li>
        </ul>
    </div>
    <div class="footer-right">
        <ul>
            <li><a
                    href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/General?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams Environment </a>
            <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus">MyHZ Study Progress </a>
            <li><a href="https://github.com/DSlipaitis">Github Environment</a>
        </ul>
    </div>
</footer>
</body>

</html>
