<html>
    <head>
        <title>Booking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>

*{
    font-family: "Poppins";
}

  body{
      width: 100%;
      height: 100%;
      /* display: flex; */
      justify-content: center;
      align-items: center;
      letter-spacing: 1px;
      background-color:#040717;
  }
  .login_form_container{
      position: relative;
      width: 500px;
      height: 570px;
      max-width: 500px;
      max-height: 570px;
      background: #040717;
      border-radius: 50px 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      margin-top: 10%;
  }
  .login_form_container::before{
      
      position: absolute;
      width: 170%;
      height: 170%;
      content: '';
      background: conic-gradient(transparent, transparent, transparent, #ee00ff);
      animation: rotate_border 6s linear infinite;
  
  }
  .login_form_container::after{
      
      position: absolute;
      width: 170%;
      height: 170%;
      content: '';
      background-image: conic-gradient(transparent, transparent, transparent, #00ccff);
      animation: rotate_border 6s linear infinite;
      animation-delay: -3s;
  }
  @keyframes rotate_border{
      0%{
          transform: rotate(0deg);
      }
      100%{
          transform: rotate(360deg);
      }
  }
  .login_form{
      position: absolute;
      content: '';
      background-color: #0c1022;
      border-radius: 50px 5px;
      inset: 5px;
      padding: 50px 40px;
      z-index: 10;
      color: #00ccff;
  
  } 
  h2{
      font-size: 40px;
      font-weight: 600;
      text-align: center;
  }
  .input_group{
      margin-top: 40px;
      position:relative;
      display:flex;
      align-items: center;
      justify-content: start;
  }
  .fa{
      font-size: 20px;
  
  }
  #login_button{
      position: relative;
      width: 300px;
      height: 40px;
      transition: 1s;
      margin-top: 70px;
  
  
  }
  #login_button {
   
      width: 300px;
      height: 40px;
      transition: 1s;
      margin-top: 70px;
      text-decoration: none;
      z-index: 10;
      cursor: pointer;
      font-size: 22px;
      letter-spacing: 2px;
      border: 1px solid #00ccff;
      border-radius: 50px;
      background-color: #0c1022;
      display: flex;
      justify-content: center;
      align-items: center;
      
  }
  .fotter {
      margin-top: 30px;
      display: flex;
      justify-content: space-between;
  
  }
  .fotter a{
      text-decoration: none;
      cursor: pointer;
      font-size: 18px;
      color: #00ccff;
  }

  input[type="submit"]{
    background: transparent;
    border: none;
    color: #00ccff;

  }
  table{
    border: 1px solid #00ccff;
    color: #00ccff;
    
  }
  td{border: 1px solid #00ccff;
    padding: 10px;
}

        </style>
        
    </head>

        <body>
        <?php
$firstName= $lastName= $date= $email = $password= "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $firstName = test_data($_GET["firstname"]);
  $lastName = test_data($_GET["lastname"]);
  $date = test_data($_GET["date"]);
  $time = test_data($_GET["time"]);
  $period = test_data($_GET["Sessionperiod"]);
  $payment = test_data($_GET["payment"]);
  $name = $firstName." ".$lastName;

}
function test_data($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}
function incPass($pass){
    $lenP= strlen($pass);
    $lastL = substr($pass,$lenP-4);
    $str ="";
    for ($i=0; $i<$lenP-4; $i++){
        $str.="*";
    }
    return $str.$lastL;
}
        ?>    
<div class="container-fluid login_form_container">
                
              <div class="login_form " align="center">
                <h2>Your booking was successful</h2>
                </br>
                </br>
                <table style="border-collapse: collapse;">
                <tr>
                    <td>Ordered by </td>
                    <td><?php echo $name;?></td>
                </tr>
                <tr>
                    <td>Booking date</td>
                    <td><?php echo $date;?></td>
                </tr>
                <tr>
                    <td>Booking time</td>
                    <td><?php echo $time;?></td>
                </tr>
                <tr>
                    <td>Session period</td>
                    <td><?php echo $period;?></td>
                </tr>
                <tr>
                    <td>Peyment method</td>
                    <td><?php echo $payment;?></td>
                </tr>
                </table>
                </div>
                

            </div>
    </body>
</html>