<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/spd.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <title>4BIKE</title>
</head>

<body>

    @include('nav.nav');
    {{-- Best Seller --}}
    <section class="pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Best Seller</h3>
                    <hr width="1100px">
                </div>

                <div class="col-20">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="cardd">
                                            <img class="img-fluid" src="image/aquila.jpg">
                                            <hr style="width: 9cm">
                                            <div class="card-body">
                                                <h4 class="card-title">AQUILA 2.0</h4>
                                                <p class="card-text">Rp 6.400.000</p>
                                                <br>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="cardd">
                                            <img class="img-fluid" src="image/dahon.jpeg">
                                            <hr style="width: 9cm">
                                            <div class="card-body">
                                                <h4 class="card-title">Dahon Ion Madion 20"</h4>
                                                <a class="card-text1"><s>Rp 4.650.000</s></a>

                                                <p class="card-text" style="margin-top: 14px">Rp 2.999.000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="cardd" style="margin-right: 3px">
                                            <img class="img-fluid" src="image/scappa.jpg">
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
                                            <img class="img-fluid" src="image/curved.jpg">
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
                                            <img class="img-fluid" src="image/thunder.jpg">
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
                                            <img class="img-fluid" src="image/london.jpg">
                                            <hr style="width: 9cm">
                                            <div class="card-body">
                                                <h4 class="card-title">London Taxi CRB M 700C</h4>
                                                <a class="card-text1"><s>Rp 6.280.000</s></a>

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
            <a class="btn btn-warning mb-3 mr-1" style="border-radius: 50%" href="#carouselExampleIndicators2"
                role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-warning mb-3 " style="border-radius: 50%" href="#carouselExampleIndicators2"
                role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </section>
    {{-- Semua Produk --}}


    <div class="row">

        <div class="col-sm-6 col-md-4">
            <div class="card border-black">
                <img src="image/dahon.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dahon Ion</h5>
                    <hr>
                    <a class="card-text"><s>Rp 4.650.000</s></a>
                    <p class="card-text" style="color:red">Rp 2.999.000</p>
                </div>
            </div>
            <!--</div>-->
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="card border-black">
                <img src="image/dahon.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dahon Ion</h5>
                    <hr>
                    <a class="card-text"><s>Rp 4.650.000</s></a>
                    <p class="card-text" style="color:red">Rp 2.999.000</p>
                </div>
            </div>
            <!--</div>-->
        </div>
        <!--</div>-->

        <div class="col-sm-6 col-md-4">
            <div class="card border-black">
                <img src="image/dahon.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dahon Ion</h5>
                    <hr>
                    <a class="card-text"><s>Rp 4.650.000</s></a>
                    <p class="card-text" style="color:red">Rp 2.999.000</p>
                </div>
            </div>

            <!--</div>-->
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card border-black">
                <img src="image/dahon.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dahon Ion</h5>
                    <hr>
                    <a class="card-text"><s>Rp 4.650.000</s></a>
                    <p class="card-text" style="color:red">Rp 2.999.000</p>
                </div>
            </div>
            <!--</div>-->
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card border-black">
                <img src="image/dahon.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dahon Ion</h5>
                    <hr>
                    <a class="card-text"><s>Rp 4.650.000</s></a>
                    <p class="card-text" style="color:red">Rp 2.999.000</p>
                </div>
            </div>
            <!--</div>-->
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card border-black">
                <img src="image/dahon.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dahon Ion</h5>
                    <hr>
                    <a class="card-text"><s>Rp 4.650.000</s></a>
                    <p class="card-text" style="color:red">Rp 2.999.000</p>
                </div>
            </div>
            <!--</div>-->
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card border-black">
                <img src="image/dahon.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dahon Ion</h5>
                    <hr>
                    <a class="card-text"><s>Rp 4.650.000</s></a>
                    <p class="card-text" style="color:red">Rp 2.999.000</p>
                </div>
            </div>
            <!--</div>-->
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card border-black">
                <img src="image/dahon.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dahon Ion</h5>
                    <hr>
                    <a class="card-text"><s>Rp 4.650.000</s></a>
                    <p class="card-text" style="color:red">Rp 2.999.000</p>
                </div>
            </div>
            <!--</div>-->
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card border-black">
                <img src="image/dahon.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dahon Ion</h5>
                    <hr>
                    <a class="card-text"><s>Rp 4.650.000</s></a>
                    <p class="card-text" style="color:red">Rp 2.999.000</p>
                </div>
            </div>
            <!--</div>-->
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card border-black">
                <img src="image/dahon.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dahon Ion</h5>
                    <hr>
                    <a class="card-text"><s>Rp 4.650.000</s></a>
                    <p class="card-text" style="color:red">Rp 2.999.000</p>
                </div>
            </div>
            <!--</div>-->
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card border-black">
                <img src="image/dahon.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dahon Ion</h5>
                    <hr>
                    <a class="card-text"><s>Rp 4.650.000</s></a>
                    <p class="card-text" style="color:red">Rp 2.999.000</p>
                </div>
            </div>
            <!--</div>-->
        </div>

    <!--</div>-->
</div>
  </div>  
           

        <div class="col-sm-6 col-md-4">
            <div class="card border-black">
                <img src="image/dahon.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dahon Ion</h5>
                    <hr>
                    <a class="card-text"><s>Rp 4.650.000</s></a>
                    <p class="card-text" style="color:red">Rp 2.999.000</p>
                </div>
            </div>
            <!--</div>-->
        </div>
    </div>

   



    @include('nav.footer')

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

</html>
