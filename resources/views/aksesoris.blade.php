<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/aks.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <title>4BIKE</title>
</head>

<body>

    @include('nav.nav');
    
    <h3 class="col-sm-2" style="margin-left: 4% ">Semua Aksesoris</h3>
    <hr width="1400px" style="margin-left: 5%"> 

    <div class="container-fluid px-0 overflow-hidden">
        <div class="row">
     
            <?php foreach($data_aksesoris as $aksesoris) { ?>
            <div class="col-sm-6 col-md-4">
                <div class="card border-black">
                    <img src="{{$aksesoris->image}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$aksesoris->nama}}</h5>
                        <hr>
                        <div class="row">                          
                            <div class="col-sm-9">
                                    <p class="card-text">{{$aksesoris->harga}}</p>
                                </div>
                                <div class="col-sm-3">
                                    <a  class="btn btn-warning" align="right" href="" style="mr-auto;" >Detail</a>
                                </div>
                            </div>  
                    </div>
                </div>
              
            </div>
    
        
            
           
            <?php } ?> 
        </div>
      </div>  
               
    
       
    
    
  
    
    
    


    @include('nav.footer')
</body>