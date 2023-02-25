<!DOCTYPE html>

@if (session('succes'))
<div class="alert alert-success shadow" role="alert" style="border-left:#155724 5px solid; border-radius: 0px">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="True" style="color:#155724">&times;</span>
  </button>
  <div class="row">
    <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-shield-fill-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm2.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.793 6.354 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
    </svg>
      <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Success!</b></p>
  </div>
</div>
  
@endif
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <style>
        .card-title{
            font-family: 'Poppins';
            font-size: 30px;
        }
        .reg{
          text-decoration: none;
        }
        .reg:hover{
            color: #FFBF00;

        }
    </style>

    

  </head>
@include('nav.nav')
  <body class="text-center">
    
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Daftar</h5>
                <form action="/register/add" method="post">
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
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="{{old('password')}}">
                    <label for="floatingPassword" valu>Password</label>
                  </div>
    
                  <div class="d-grid">
                    <button class="btn btn-warning btn-login text-uppercase fw-bold" style="margin-bottom: 20px" type="submit">Sign
                      in</button>
                  </div>
                  <p>Sudah Memiliki Akun? <a class="reg" href="/login" > Login</a> </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  

    @include('nav.footer')
  </body>
</html>




