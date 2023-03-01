

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <title>4BIKE</title>
</head>

<body style="background-color: #ffffff;">
    @include('nav.nav')

        <div class="small-container">
            <div class="row">          
                <div >
                    <img class="asd" src="image/AQUILA-2.0-1.jpg">
                </div>
                <div class="row">
                <div class="harga">
                    <h2>AQUILA 2.0</h2>
                </div>
                <div class="kosong">
                    <h1>.</h1>

                </div>
                <div class="harga2">
                    <h3>Rp. 6.000.000</h3>
                </div>
                </div>
                
                
                <div class="qtt">
                    <div class="row" >
                        <div class="counter">
                            <span class="down" onClick='decreaseCount(event, this)'>-</span>
                            <input type="text" value="1">
                            <span class="up"  onClick='increaseCount(event, this)'>+</span>
                        </div>
                    </div>
                </div>

                <div class="jmlh">
                <div>       
                    <a  href="" class="btn1">Pesan Sekarang</a>
                    <a  href="" class="button">Tambah Ke Cart</a>
                </div>
                </div>

                <div class="brd">
                    <h1>DESCRIPTION</h1>
                    <p class="dss">AQUILA 2.0 dirancang untuk menempuh berbagai lintasan, termasuk off road ringan. MTB ini 
                        dibangun dari rangka berbahan alloy yang ringan dan kokoh serta dilengkapi dengan 
                        suspensi ganda untuk memberikan kenyamanan bagi penggunanya. Dengan menggunaan 
                        ban lebar (27.5×2.40″), MTB ini memiliki traksi yang lebih baik saat di atas lintasan offroad.
                    </p>
                </div>
                
                <br>     <br>      <br>      <br>      <br>      <br>      <br>
            
                
                <div class="brd2">
                <table >
                    
                    <tr>
                        <th>
                            <h1>SPESIFICATION
                            </h1>
                        </th>
                       
                    </tr>
                    <tr>
                      <td>Color</td>
                      <td>:</td>
                      <td>Black-Red </td>
                    </tr>
                    <tr>
                      <td>Frame</td>
                      <td>:</td>
                      <td>Alloy 6061 MTB XC 27.5″</td>
                    </tr>
                    <tr>
                      <td>Fork </td>
                      <td>:</td>
                      <td>Pacific Alloy Suspension Fork 27.5″, Travel 100 mm, Lock Out</td>
                    </tr>
                    <tr>
                        <td>Rear Shock</td>
                        <td>:</td>
                        <td>EXA RE-A5 165 mm</td>
                    </tr>
                    <tr>
                        <td>Shifter</td>
                        <td>:</td>
                        <td>Shimano SL-M315 2×8 Speed</td>
                    </tr>

                    <tr>
                        <td>Front Derailleur</td>
                        <td>:</td>
                        <td>Shimano Tourney TY-700 2 Speed</td>
                      </tr>
                      <tr>
                        <td>Rear Derailleur</td>
                        <td>:</td>
                        <td>Shimano Tourney TY-800 8 Speed</td>
                      </tr>
                      <tr>
                        <td>Brakes</td>
                        <td>:</td>
                        <td>Shimano MT-200 Hydraulic Disc Brake</td>
                      </tr>

                      <tr>
                        <td>Crankset</td>
                        <td>:</td>
                        <td>  Pacific Alloy 22/36 T</td>
                      </tr>

                      <tr>
                        <td>Saddle</td>
                        <td>:</td>
                        <td>Pacific SaddlePedalAlloy </td>
                      </tr>


                      <tr>
                        <td>Pedal </td>
                        <td>:</td>
                        <td>HubPacific Alloy 32H</td>
                      </tr>


                      <tr>
                        <td>Rims</td>
                        <td>:</td>
                        <td>Pacific Alloy Double Wall 27.5″</td>
                      </tr>


                      <tr>
                        <td>Tires</td>
                        <td>:</td>
                        <td>CST BFT 27.5″ x 2.40″</td>
                      </tr>


                      <tr>
                        <td>Seatpost</td>
                        <td>:</td>
                        <td>Pacific Alloy ø 30.9 x 300 mm</td>
                      </tr>

                      <tr>
                        <td>Stem</td>
                        <td>:</td>
                        <td>Pacific Alloy Ext: 50 mm</td>
                      </tr>

                      <tr>
                        <td>Handle Bar </td>
                        <td>:</td>
                        <td> Pacific Alloy W: 720 mm</td>
                      </tr>
                  
                  </table>
                </div>
                  
                
             
                
                
                
                
                
            </div>        
                
        </div>
        
    @include('nav.footer')

  
</body>
    <script type="text/javascript">
        function increaseCount(a, b) {
          var input = b.previousElementSibling;
          var value = parseInt(input.value, 10); 
          value = isNaN(value)? 0 : value;
          value ++;
          input.value = value;
        }
        function decreaseCount(a, b) {
          var input = b.nextElementSibling;
          var value = parseInt(input.value, 10); 
          if (value > 1) {
            value = isNaN(value)? 0 : value;
            value --;
            input.value = value;
          }
        }
      </script>

</html>