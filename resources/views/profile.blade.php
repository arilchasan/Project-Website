<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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
    @include('nav.nav')
    <div class="card mb-3" style="width: 900px; margin-bottom; 50%;margin-right: 15%; height: 650px; border: solid; border-radius: 28px; box-shadow: 10px 10px 10px 10px grey; margin-left: 20%; margin-top: 10%; margin-bottom: 20%;">
    <div class="row g-0">
    <div class="col-md-4">
    <button type="button" class="btn btn-warning" style="width: 70px; border-radius: 10px; margin-top: 10px; margin-left: 10px; color: white;">Profile</button>
    <img src="image/gimyung.jpg" class="img-fluid rounded-start" alt="..." style="border-radius: 28px; width: 500px; box-shadow: rgba(0, 0, 0, 0.19) 0px 20px 30px, rgba(0, 0, 0, 0.23) 0px 6px 6px; margin-top: 80px;">
    </div>
    <div class="col-md-8">
    <div class="card-body">
        <div class="rounded-pill">
        </div>
        <div class="container-colum" style="margin-top: 20%; width: 100%; display: flex; flex-direction: column; justify-content: end; align-items: start; align-content: start;">
            <b class="card-text" style="">Nama :</b>
            <div class="border border p-2 mb-2" style="width: 300px; border-radius: 100px; margin-top: 10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">Kim Sofyan</div>
            <b class="card-text">Nomor :</b>
            <div class="border border p-2 mb-2"style="width: 300px; border-radius: 100px; margin-top: 10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">0812237218</div>
            <b class="card-text">Email :</b>
            <div class="border border p-2 mb-2"style="width: 300px; border-radius: 100px; margin-top: 10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">gimyung@gmail.com</div>
            <p class="card-text"><small class="text-muted">Beli Sepeda Di 4BIKE</small></p>
        </div>
        <div class="container-row" style="width: 100%; display: flex; flex-direction: row; justify-content: end;">
            <button type="button" class="btn btn-warning" style="width: 70px; border-radius: 10px; margin-top: 180px; color: white;">Edit</button>
            <button type="button" class="btn btn-warning" style="margin-top: 180px; border-radius: 10px; margin-left: 10px; color: white;">Logout</button>
        </div>
    </div>
    </div>
    </div>
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