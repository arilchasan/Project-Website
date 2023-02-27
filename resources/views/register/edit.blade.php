
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <title>4BIKE</title>
</head>
@include("nav.nav")
<body>  
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5  fs-5">Edit Informasi</h5>
                <form action="/register/update/ {{$user->id}}" method="post">
                    @csrf
                  <div class="form-floating mb-3">
                    <input type="name" class="form-control" id="floatingInput" placeholder="username" name="name" value="{{old('name')}}">
                    <label for="floatingInput">Username </label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{old('email')}}">
                    <label for="floatingInput">Email </label>
                  </div>
                
                  
                    
                  
                  <div class="form-floating mb-3">
                    <input type="name" class="form-control" id="" placeholder="alamat" name="alamat" value="{{old('alamat')}}">
                    <label for="" >Alamat</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="name" class="form-control" id="" placeholder="no_telp" name="no_telp" value="{{old('no_telp')}}">
                    <label for="" >No. Hp</label>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                        <a href="/profile" class="btn btn-primary  text-uppercase fw-bold" style="width: 10pc">Kembali</a>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-warning btn-login text-uppercase fw-bold" style="width: 10pc" type="submit">Simpan
                        </button>
                    </div>
                  </div>
                  <div class="d-grid">
                    
                  </div>
                 
                </form>
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