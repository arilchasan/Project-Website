<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/garansi.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font.css') }}">
        <link href="css/flexslider.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <title>Garansi</title>
</head>
<body>
@include('nav.nav')

        <!--Isi-->
        <div class="judul middle">
            <h1>LAYANAN GARANSI</h1>
        </div>
        <div class="judul">
            <h1>CAKUPAN GARANSI SEPEDA</h1>
        </div>
        
        <div class="isi">
            <h4>Garansi pada frame sepeda yang disebabkan oleh kesalahan proses pembuatan pabrik, dimana termasuk segala sambungannya. Tidak berfungsinya bagian-bagian dari sepeda yang disebabkan proses pembuatan di pabrik.</h4>
        </div>
        <div class="judul">
            <h1>KONDISI DILUAR CAKUPAN GARANSI</h1>
        </div>
        <div class="isi second">
            <ul>
                <li><h4>Kerusakan yang disebabkan pemakaian termasuk pemakaian yang tidak wajar.</h4></li>
                <li><h4>Kerusakan karena kecelakaan. korosi,dan sepeda yang tidak dirawat dengan semestinya.</h4></li>
                <li><h4>Bagian-bagian yang mengalami keausan akibat dari pemakaian, seperti ban, karet rem serta kecemerlangan cat, dan sebagainya. Cacat pada cat permukaan seperti noda, baret, cat terkelupas dan kerusakan lainnya.</h4></li>
                <li><h4>Sepeda yang sudah dimodifikasi atau sudah dipindahtangankan.</h4></li>
                <li><h4>Sepeda yang dipakai untuk tujuan komersial.</h4></li>
                <li><h4>Segala biaya pengiriman sepeda dan bagian sepeda yang akan diperbaiki.</h4></li>
                <li><h4>Kartu garansi sudah kedaluwarsa.</h4></li>
            </ul>
        </div>
                @include('nav.footer')

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</html>