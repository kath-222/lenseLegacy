<html>
<html>
    <head>
        <title>servises</title>
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
  .input_text{
      width: 95%;
      height: 30px;
      background: transparent;
      border: none;
      outline: none;
      border-bottom: 1px solid #00ccff;
      font-size: 20px;
      padding-left: 10px;
      color: #00ccff;
  
  }
  .fa{
      font-size: 20px;
  
  }
  
  

  table{
    border: 1px solid #00ccff;
    color: #00ccff;
    border-collapse: collapse;
    
  }
  td{border: 1px solid #00ccff;
    padding: 10px;
}

  

        </style>
        
    </head>

<body>
<?php
class Service {
    public $serviceName;
    public $serviceType;
    public $servicePage;

    public function __construct($name, $type, $page) {
        $this->serviceName = $name;
        $this->serviceType = $type;
        $this->servicePage = $page;
    }
}

$services = [
    new Service("view", "noninteractive", "gallery"),
    new Service("book", "interaction", "book")
];

function displayServiceTable($services) {
    echo "<table>";
    echo "<thead>";
    echo "<tr><td>Name</td><td>Type</td><td>Page</td></tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($services as $service) {
        echo "<tr>";
        echo "<td>" . $service->serviceName . "</td>";
        echo "<td>" . $service->serviceType . "</td>";
        echo "<td>" . $service->servicePage . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}
?>
            <div class="container-fluid login_form_container">
                
              <div class="login_form " align="center">
                <h2>List of Services</h2>
                </br>
                </br>
                
                <?php displayServiceTable($services);?>

                </div>
                

            </div>
    </body>
</html>        

