<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
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

    @if (session('succes'))
        <center>
            <div class="alert alert-success shadow " role="alert"
                style="border-left:#155724 5px solid; border-radius: 0px;width:50pc;margin-top:20px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="True" style="color:#155724">&times;</span>
                </button>
                <div class="row">
                    <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="m-1 bi bi-shield-fill-check"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm2.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.793 6.354 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                    </svg>
                    <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Berhasil!</b>Data
                        Berhasil diedit !</p>
                </div>
            </div>
        </center>
    @endif

    @foreach ($data_user as $user )
        

    <div class="card mb-3"
        style="width: 900px; margin-bottom; 50%;margin-right: 15%; height: 680px; border: solid; border-radius: 28px; box-shadow: 10px 10px 10px 10px grey; margin-left: 20%; margin-top: 2%; margin-bottom: 20%;padding:15px">
        <div class="row g-0">
            <div class="col-md-4">

                   
                        <a type="button" class="btn btn-warning"
                            style="width: 70px; border-radius: 10px; margin-top: 10px; margin-left: 10px; color: white;" href="/register/edit/{{ $user->id }}">Edit</a>
                      
                   
                      
                <img src="image/avatar.png" class="img-fluid rounded-start" alt="..."
                    style="border-radius: 28px; width: 500px;margin-top: 120px;margin-left:50px">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="rounded-pill">
                    </div>
                    <div class="container-colum"
                        style="margin-top: 20%; width: 100%; display: flex; flex-direction: column; justify-content: end; align-items: start; align-content: start;margin-left:50px">
                      
                        <b class="card-text" style="color:black">Nama :</b>
                        <div class="border border p-2 mb-2"
                            style="width: 300px; border-radius: 100px; margin-top: 10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                            {{$user->name}}</div>

                        <b class="card-text" style="color:black">Nomor :</b>
                        <div
                            class="border border p-2 mb-2"style="width: 300px; border-radius: 100px; margin-top: 10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                            {{$user->no_telp}}</div>

                        <b class="card-text" style="color:black">Email :</b>
                        <div
                            class="border border p-2 mb-2"style="width: 300px; border-radius: 100px; margin-top: 10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                            {{$user->email}}</div>

                        <b class="card-text" style="color:black">Alamat :</b>
                        <div
                            class="border border p-2 mb-2"style="width: 300px; border-radius: 100px; margin-top: 10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                            {{$user->alamat}}</div>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning"
                                style="width: 70px; border-radius: 10px; margin-top: 10px; margin-left: 10px; color: white;">Logout</button>
                            </form>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
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

</html>
