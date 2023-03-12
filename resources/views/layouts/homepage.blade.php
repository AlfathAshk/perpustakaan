<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stematel Library</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>

<body>
    <nav class="navbar">
        <img src="{{ asset('img/logo.png') }}" alt="logos" style="width: 50px; height: auto;">
        <h1>Stematel Library</h1>
        <div class="nav-menu">
            <button class="btn" onclick="location.href='{{ route('login') }}'">Login</button>
        </div>
    </nav>
    <section class="hero-container">
        <div>
            <div>
                <h1>Selamat Datang!</h1>
                <p>Mari Buka Jendela Dunia</p>
            </div>
        </div>
        <img src="{{ asset('img/2108.i203.022.F.m004.c9.college university students professors cartoon.jpg') }}" alt="hero">
    </section>
    <section class="description-container">
        <div>
            <div>
                <h2>Apa Aja Sih yang Ada di Library?</h2>
                <p>Stematel Library adalah tempat untuk membaca dan meminjam buku layaknya
                    perpustakaan. Perpustakaan ini berbasis online jadi dapat diakses dimanapun dan kapanpun
                </p>
            </div>
            <div class="description-left-footer">
                <p>SMK Telkom Purwokerto</p>
                <p class="font-weight-bold">20 Mei 2020</p>
            </div>
        </div>
        <img src="{{ asset('img/young-woman-studying-library.jpg') }}" alt="desc">
    </section>
    <div>
        <p></p>
    </div>
    <section class="content-container">
        <div class="card">
            <img src="{{ asset('img/buku/Ayah.jpeg') }}" alt="card1" style="height: 400px;">
            <div class="card-body">
                <h3>Ayah</h3>
                <p>Ayah adalah sebuah novel fiksi yang ditulis Andrea Hirata, dan di terbitkan oleh Bentang Pustaka pada 2015.
                    Novel ini berkisah tentang perjuangan serta perasaan sayang seorang ayah kepada anaknya, tanpa mengenal ikatan darah sekalipun.</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('img/buku/download (1).png') }}" alt="card2" style="height: 400px;">
            <div class="card-body">
                <h3>Crime and Punishment</h3>
                <p>Kejahatan dan Hukuman atau Crime and Punishment (Rusia pra-reformasi: Преступленіе и наказаніе; pasca-reformasi  bahasa Rusia: Преступление и наказание, tr. Prestupléniye i nakazániye; IPA: [prʲɪstʊˈplʲenʲɪje ɪ nəkɐˈzanʲɪje]) adalah sebuah novel karya penulis Rusia Fyodor Dostoevsky.
                    Novel tersebut mula-mula diterbitkan dalam jurnal sastra The Russian Messenger.</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('img/buku/The-Academys-Weakest-Became-A-DemonLimited-Hunter.jpg') }}" alt="card3" style="height: 400px;">
            <div class="card-body">
                <h3>The Academy's Weakest Became A Demon Limited Hunter</h3>
                <p>I possessed the weakest character in Hell difficulty, in the game I enjoyed so much. I want to survive, but the way the main character is being controlled is atrocious.
I cant help it.
I have to personally block the bad ending myself.</p>
    </section>
    <section class="what-is-container">
        <div>
            <div>
                <h1>Ingin baca lebih banyak?</h1>
                <p>Join Stematel Library yuk, temukan buku-buku yang menarik untuk dibaca</p>
            </div>
        </div>
        <img src="{{ asset('img/book-library-with-open-textbook.jpg') }}" alt="what-is">
    </section>
    <section class="button-container">
        <button class="btn" onclick="location.href='{{ route('login') }}'">Baca Sekarang</button>
    </section>
    <footer>
        <p><b>Stematel Library</b> 2020 copyright all rights reserved</p>
    </footer>

</body>

</html>