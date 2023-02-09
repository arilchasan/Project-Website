<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <title>4BIKE</title>
</head>
<body>
    @include('nav.nav')

    {{-- Detail Produk --}}
    <section>
        <div class="container-fluid px-0 overflow-hidden">
            <div class="row">
                <div class="col-sm-8">    
                    <div class="gambar">           
                        <img class="img-fluid" src="image/aquila.jpg" style="border: 1px black solid">
                    </div>
                </div>
            </div>
            
    </section>

    {{-- @include('nav.footer') --}}
</body>