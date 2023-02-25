
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <title>4BIKE</title>
</head>
<header>
    <!-- ---Header Navbar-- -->
    <div class="header_section header_bg">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #FFBF00; ">
            <a href="home.html" class="logo"></a><img src="image/4bike.png" style="width: 220px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline">
                <input class="form-control  " type="search" placeholder="Cari Sepeda" aria-label="Search">
                <button class="btn btn-outline-warning  my-sm-0" type="submit"><img class="search" src="image/search.png"></button>
            </form> 
            <div class="navbar-collapse justify-content-start" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="margin-left:150px ;"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sepeda" style=""><b>Sepeda</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aksesoris" style=""><b>Aksesoris</b></a>
                    </li>
                    {{-- <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button  type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li> --}}
                    {{-- <div class="nav-item ms-auto"> --}}
                    {{-- <div class="ava" >
                        <div class="row"> --}}
                            {{-- <div class="ttt"> --}}
                               
                                
                            </div> 



                            {{-- <div class="col-sm-5"> --}}
                                <ul class="navbar-nav ms-auto">
                                    @auth
                                    
                                      <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-expanded="false" type="button">
                                          Hi, {{ Auth()->user()->name }}
                                        </a>
                                        
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="/profile"><i class="fa fa-user" style="margin-right: 20px" ></i>Profile</a></li>
                                          <li> <hr class="dropdown-divider"></li>
                                          <li><a  class="dropdown-item" href="/keranjang"><i class="fa fa-shopping-cart " style="margin-right: 14px" aria-hidden="true" ></i>Keranjang</a></li>                          
                                          <li> <hr class="dropdown-divider"></li>
                                         
                                          <li>
                                            <form action="/logout" method="post">
                                              @csrf
                                              <button  type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right" style="margin-right: 15px"></i>Logout</button>
                                            </form>
                                          </li>
                                          @else
                                            <li class="nav-item">
                                              <a class="nav-link" href="/login" class="bi bi-box-arrow-in-right"><img src="image/avatar.png" style="width:40px;"></a></a>
                                            </li>
                                        </ul>
                                        </li>
                                            
                                       @endauth
                                       {{-- @else --}}
                                       {{-- <li><a href="/login">Login</a></li> --}}
                                    </ul>  
                            </div>


                        </div>                        
                    </div>
                </div>
                </ul>
            </div>
        </nav>
    </header>      

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
