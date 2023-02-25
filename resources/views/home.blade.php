
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
    @if (session('succes'))   
    <center><div class="alert alert-success shadow " role="alert" style="border-left:#155724 5px solid; border-radius: 0px;width:60pc;margin-top:10px;" >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="True" style="color:#155724">&times;</span>
        </button>
        <div class="row">
          <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-shield-fill-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm2.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.793 6.354 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
          </svg>
            <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Success!</b>Registrasi Berhasil,Silahkan Login</p>
        </div>
      </div>
      </center> 
      @endif
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
        {{-- Best Seller --}}
        <section class="pt-10 pb-10">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <h3 class="mb">Best Seller</h3>
                        
                        <a class="text-end" href="/sepeda" role="button">Lihat Semua Produk</a>
                        <hr width="1200px">
                    </div>
                    
                    
                    <div class="col-20">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
        
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
        
                                        <div class="col-md-4 mb-3">
                                            <div class="cardd">
                                                <img class="img-fluid"  src="image/aquila.jpg">
                                                <hr style="width: 9cm">
                                                <div class="card-body">
                                                    <h4 class="card-title">AQUILA 2.0</h4>
                                                    <p class="card-text" >Rp 6.400.000</p>
                                                  <br>
                                                </div>
        
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="cardd">
                                                <img class="img-fluid"  src="image/dahon.jpeg">
                                                <hr style="width: 9cm">
                                                <div class="card-body">
                                                    <h4 class="card-title">Dahon Ion Madion 20"</h4>
                                                    <a class="card-text1"  ><s>Rp 4.650.000</s></a>
                                                    
                                                   <p class="card-text" style="margin-top: 14px">Rp 2.999.000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="cardd" style="margin-right: 3px">
                                                <img class="img-fluid"  
                                                src="image/scappa.jpg">
                                                <hr style="width: 9cm">
                                                <div class="card-body">
                                                    <h4 class="card-title">Genio Scappa 700C"</h4>
                                                    <p class="card-text">Rp 2.950.000</p>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
        
                                        
                                        <div class="col-md-4 mb-3">
                                            <div class="cardd">
                                                <img class="img-fluid" 
                                                src="image/curved.jpg">
                                                <hr style="width: 9cm">
                                                <div class="card-body">
                                                    <h4 class="card-title">Element Curved 700C"</h4>
                                                    <p class="card-text">Rp 6.525.000</p>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="cardd">
                                                <img class="img-fluid" 
                                                src="image/thunder.jpg">
                                                <hr style="width: 9cm">
                                                <div class="card-body">
                                                    <h4 class="card-title">Twitter Thunder Brake 700C"</h4>
                                                    <p class="card-text">Rp 21.500.000</p>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="cardd" style="margin-right: 3px">
                                                <img class="img-fluid" 
                                                src="image/london.jpg">
                                                <hr style="width: 9cm">
                                                <div class="card-body">
                                                    <h4 class="card-title">London Taxi CRB M 700C</h4>
                                                    <a class="card-text1"  ><s>Rp 6.280.000</s></a>
                                                    
                                                   <p class="card-text" style="margin-top: 15px">Rp 5.024.000</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                       
        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 text-right">
              <a class="btn btn-warning mb-3 mr-1" style="border-radius: 50%" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
              </a>
              <a class="btn btn-warning mb-3 " style="border-radius: 50%" href="#carouselExampleIndicators2" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
              </a>
          </div>
        </section>

          {{-- Semua Merk --}}
  
     <section class="pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="row">
                    <h3 class="mb">Semua Merk</h3>
                    <hr width="1200px">
                </div>
                
                
                <div class="col-20">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
    
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
    
                                    <div class="col-md-4 mb-3">
                                        <div class="cardd2">
                                            <img class="img-fluid"  src="image/logoPolygon.png">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="cardd2">
                                            <img class="img-fluid"  src="image/logodahon.jpg">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="cardd2" style="margin-right: 3px">
                                            <img class="img-fluid"  
                                            src="image/logoPacific.jpg">
                                           
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
    
                                    
                                    <div class="col-md-4 mb-3">
                                        <div class="cardd3">
                                            <img class="img-fluid" 
                                            src="image/united.jpg">
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="cardd3">
                                            <img class="img-fluid" 
                                            src="image/thrill.jpg">
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="cardd3" style="margin-right: 3px">
                                            <img class="img-fluid" 
                                            src="image/Shimano.jpg">
                                           
                                        </div>
                                    </div>
                                   
    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-12 text-center">
          <a class="btn btn-warning mb-3 mr-1" style="border-radius: 80%" href="#carouselExampleIndicators3" role="button" data-slide="prev">
              <i class="fa fa-arrow-left"></i>
          </a>
          <a class="btn btn-warning mb-3 " style="border-radius: 80%" href="#carouselExampleIndicators3" role="button" data-slide="next">
              <i class="fa fa-arrow-right"></i>
          </a>
      </div>
    </section>
   

        


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
