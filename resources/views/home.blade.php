
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <title>4BIKE</title>
</head>

<body>
    @include('nav.nav')
    <!-- ---Header Navbar-- -->
    {{-- <div class="header_section header_bg">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #FFBF00; ">
            <a href="home.html" class="logo"></a><img src="image/4bike.png" style="width: 220px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <form class="form-inline">
                        <input class="form-control  " type="search" placeholder="Cari Sepeda" aria-label="Search">
                        <button class="btn btn-outline-warning  my-sm-0" type="submit"><img class="search" src="image/search.png"></button>
                    </form>
                    <li class="nav-item active">
                        <a class="nav-link" href="" style="margin-left:150px ;"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sepeda" style=""><b>Sepeda</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" style=""><b>Aksesoris</b></a>
                    </li>
                    <div class="ava" >
                        <div class="row">
                            <li><a href="#"><img src="image/keranjang.png" style="width:40px;"></a></li>
                            <li><a href="#"><img src="image/avatar.png" style="width:40px;margin-left:30px"></a></li>
                        </div>                        
                    </div>
                </ul>
            </div>
        </nav> --}}
        <!-- ---Carousel--    -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="image/C1.png" style="padding: 2%;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/C2.png" style="padding: 2%;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/C3.png" style="padding: 2%;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        @include('nav.footer')
        <!-- Site footer -->
        {{-- <footer class="site-footer" id="footer">
            <div class="container" >
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <img src="image/4bike.png">
                        <p class="text-justify">4BIKE adalah website toko sepeda nasional yang mengutamakan kualitas tinggi dengan harga yang terjangkau  </p>
                    </div>
                
                    <div class="col-xs-6 col-md-3">
                        <h6><a>Support</a></h6>
                        <h6><a>Garansi</a></h6>
                        <h6><a>Tentang Kami</a></h6>
                        
                    </div>
                    
                        <div class="col-xs-6 col-md-3">
                            <h6>Follow Us</h6>
                           <br>
                           <div class="f_social_icon">
                            <a href="#" class="fa fa-facebook" style="color: rgb(41, 41, 174)"></a>
                            <a href="#" class="fa fa-instagram" style="color: rgb(193, 53, 132)"></a>
                            <a href="#" class="fa fa-youtube" style="color: rgb(181, 24, 24)"></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>                
                </div>
            </div>
            <div class="bwh">
            <div class="container">
                <div class="row" style="margin-left: 225px;">
                    <div class="col-md-8 col-sm-6 col-xs-12" style="text-align: center;">
                        <p class="copyright-text" style="color: white">Copyright &copy; 2020 
                            <a style="color: white">4bike.com</a>.
                        </p>
                    </div>

                    
                </div>
            </div>
        </div>
        </footer> --}}
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
