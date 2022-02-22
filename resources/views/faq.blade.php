<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
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
                <h2>Daivaras Šlipaitis Website</h2>
            </li>
            <li><a href="/">Home</a></li>
            <li><a href="profile">Profile</a></li>
            <li><a href="dashboard">Dashboard</a></li>
            <li><a class="active" href="faq">FAQ</a></li>
            <li><a href="blog">Blog</a></li>
            <img src=../img/logo.png>
        </ul>
    </nav>
</header>
<main>
    <ul>
        @foreach($faqs as $faq)
            <div class="page_content">
                <article class="faq">
                    <h3>{{ $faq->question}}</h3>
                    <p>{{ $faq->answer}}</p>
                </article>
            </div>
        @endforeach
    </ul>
{{--    <div class="page_content">--}}
{{--        <article class="faq">--}}
{{--            <h3>How can you print a document from your laptop at HZ?</h3>--}}
{{--            <p>Follow the link: <a href="https://print.hz.nl/login.cfm?dest=index.cfm&"> Print.HZ</a> to login with your HZ--}}
{{--                account. After log in you can upload your document--}}
{{--                you want to print and by using your pass on any of the HZ printers you will be able to print your uploaded--}}
{{--                document. </p>--}}
{{--        </article>--}}
{{--        <article class="faq">--}}
{{--            <h3>How can you scan a document a send it to your laptop at HZ?</h3>--}}
{{--            <p>In order to scan you will have to use your pass next to any of the printers at HZ. Once you scanned your pass--}}
{{--                you will have an option for scanning.</p>--}}
{{--        </article>--}}
{{--        <article class="faq">--}}
{{--            <h3>What do you need to do when you are sick / show symptoms of coronavirus?</h3>--}}
{{--            <p>Inform the teachers or the Helpdesk about your situatuion and stay home to not spread the virus around.--}}
{{--                You will be able to follow the lectures online via the BBB rooms, you can find on HZ Learn.</p>--}}
{{--        </article>--}}
{{--        <article class="faq">--}}
{{--            <h3>How can you book a project space in one of the wings?</h3>--}}
{{--            <p> You can do this in the Selfservice by following the link: <a--}}
{{--                    href="https://print.hz.nl/login.cfm?dest=index.cfm&"> HZ Portal.</a></p>--}}
{{--        </article>--}}
{{--        <article class="faq">--}}
{{--            <h3>What are the instructions if you want to park your car at the HZ parking lot?</h3>--}}
{{--            <p>There is a parking lot at the former PEZM, which you can find "across the road.</p>--}}
{{--        </article>--}}
{{--    </div>--}}
</main>
<footer>
    <div class="footer-left">
        <ul>
            <li><a href="https://hz.nl/en/study-programmes/it">Course and Examination Regulations</a></li>
            <li><a href="https://hz.nl/uploads/documents/Regelingen/EN/OERS/Uitvoeringsregeling-HZ-OER-IBMS-English.pdf">The
                    Implementation Regulations</a></li>
            <li><a href="https://hz.nl/en/lectureships/onderwijsexcellentie">This Learn Environment</a></li>
        </ul>
    </div>
    <div class="footer-right">
        <ul>
            <li><a
                    href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/General?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams
                    Environment </a>
            <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus">MyHZ Study Progress </a>
            <li><a href="https://github.com/DSlipaitis">Github Environment</a>
        </ul>
    </div>
</footer>
</body>

</html>
