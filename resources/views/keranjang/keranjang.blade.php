<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>4BIKE</title>
</head>

<body>
    @include('nav.nav')

      @foreach ($data as $sepeda )
        
      <div class="container">
          <table id="cart" class="table table-hover table-condensed mb-50">
            <thead>
              <tr>
                <th style="width:100%">Produk</th>
                <th style="width:20%">Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-th="Product">
                  <div class="row">
                    <div class="col-sm-2 hidden-xs"><img src="{{$sepeda->image}}" style="width: 130px" /></div>
                    <div class="col-sm-10"> 
                      <h4 class="nomargin" style="margin-top: 33px; margin-left: 20px">{{$sepeda->merk}}</h4>
                      
                    </div>
                  </div>
                </td>
                
                <td data-th="Subtotal" class="text-center">
                  <p style="margin-top: 33px">{{$sepeda->harga}}</p>
                </td>
                <td class="actions" data-th="">
                  <button class="btn btn-danger btn-sm" style="margin-top: 33px"><i class="fa fa-trash-o"></i></button>
                </td>
              </tr>
            </tbody>
            <tfoot>
  
              <tr>
                <td><a href="/" class="btn btn-warning"><i class="fa fa-angle-left"></i>Kembali Belanja</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>{{$sepeda->harga}} </strong></td>
                <td><a href="#" class="btn btn-success btn-block">Bayar <i class="fa fa-angle-right"></i></a></td>
              </tr>
            </tfoot>
          </table>
        </div>
        
      @endforeach

        <!-- Site footer -->
  <footer class="footer">
  <div class="container" >
      <div class="row">
          <div class="col-sm-12 col-md-6">
              <img src="image/4bike.png" style="width: 200px; height:100px">
              <p class="text-justify">4BIKE adalah website toko sepeda nasional yang mengutamakan kualitas tinggi dengan harga yang terjangkau  </p>
          </div>
      
          <div class="col-xs-6 col-md-3">
              <div class="col-xs-6 col-md-3">
              <h6><a href="/" style="color: white"><b>4BIKE</b></a></h6>
              <h6><a href="/garansi" style="color: white">Garansi</a></h6>
              <h6><a href="/about" style="color: white">Tentang Kami</a></h6>
              
          </div>
              
          </div>
          
              <div class="col-xs-6 col-md-3">
                  <h6>Follow Us</h6>
                 <br>
                 <div class="f_social_icon">
                  <a href="#" class="fab fa-facebook-f" ></a>
                  <a href="#" class="fab fa-instagram" style="color: rgb(193, 53, 132)"></a>
                  <a href="#" class="fab fa-youtube" style="color: rgb(181, 24, 24)"></a>
                  
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
</footer>
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
