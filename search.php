<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bb</title>
</head>
<body>





<form action="search.php" method="POST">
        <h1>FILTER</h1>
        <h2>photographey type</h2>
       <input type="radio" value="new born" name="type1">new born<br> 
       <input type="radio" value="wedding" name="type1">wedding<br>  
       <input type="radio" value="official events" name="type1">official events <br> 
       <input type="radio" value="food" name="type1">food<br> 
       <input type="radio" value="product" name="type1">product<br>  
       <input type="radio" value="fashion" name="type1">fashion<br> 
       <input type="radio" value="family" name="type1">family<br> 
    
       <h2>location</h2>
       <input type="radio" value="janoub albatinah" name="location">janoub albatinah<br> 
       <input type="radio" value="north albatinah" name="location">north albatinah<br>  
       <input type="radio" value="albraimi" name="location">albraimi<br> 
       <input type="radio" value="musandam" name="location">musandam<br> 
       <input type="radio" value="muscat" name="location">muscat<br>  
       <input type="radio" value="aldakhilia" name="location">aldakhilia<br> 
    
       <input type="submit" value="send">
    
    </form>


    <?php

$servername= "localhost"; $username = "root";  $password = "";
$dbname= "photography_website";
// 1- Create DB connection
$conn = mysqli_connect($servername, $username, $password, $dbname);



if ($_POST["type1"]=="new born"){
    $sql="SELECT * FROM photographer WHERE PhotographyType='new born' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        // echo "Username " . $row["Username"].
        // " - type: " . $row["PhotographyType"].
        // " - location:" . $row["Location"]. "<br>";

        }
        } else {
        echo "No photographer were found";
        }
        
}




?>
<table border="border">
   <tr>
    <th>UserName</th>
    <th>Location</th>
    <th>PhotographyType</th>
</tr>
<tr>
<?php
    if ($_POST["type1"]=="new born"&& $_POST["location"]=="janoub albatinah"){
    $sql="SELECT * FROM photographer WHERE PhotographyType='new born' AND  Location='janoub albatinah' ";
    $result = mysqli_query($conn, $sql);
    }
    elseif ($_POST["type1"]=="new born"&& $_POST["location"]=="north albatinah"){
        $sql="SELECT * FROM photographer WHERE PhotographyType='new born' AND Location='north albatinah' ";
        $result = mysqli_query($conn, $sql);
        }
        elseif ($_POST["type1"]=="new born"&& $_POST["location"]=="albraimi"){
            $sql="SELECT * FROM photographer WHERE PhotographyType='new born' AND Location='albraimi' ";
            $result = mysqli_query($conn, $sql);
            }
            elseif ($_POST["type1"]=="new born"&& $_POST["location"]=="musandam"){
                $sql="SELECT * FROM photographer WHERE PhotographyType='new born' AND Location='musandam' ";
                $result = mysqli_query($conn, $sql);
                }
                elseif ($_POST["type1"]=="new born"&& $_POST["location"]=="muscat"){
                    $sql="SELECT * FROM photographer WHERE PhotographyType='new born' AND Location='muscat' ";
                    $result = mysqli_query($conn, $sql);
                    }
                    elseif ($_POST["type1"]=="new born"&& $_POST["location"]=="aldakhilia"){
                        $sql="SELECT * FROM photographer WHERE PhotographyType='new born' AND Location='aldakhilia' ";
                        $result = mysqli_query($conn, $sql);
                        }
    elseif($_POST["type1"]=="wedding"&& $_POST["location"]=="aldakhilia"){
        $sql="SELECT * FROM photographer WHERE PhotographyType='wedding' AND Location='aldakhilia' ";
        $result = mysqli_query($conn, $sql);
        }
        elseif($_POST["type1"]=="wedding"&& $_POST["location"]=="janoub albatinah"){
            $sql="SELECT * FROM photographer WHERE PhotographyType='wedding' AND Location='janoub albatinah' ";
            $result = mysqli_query($conn, $sql);
            }
            elseif($_POST["type1"]=="wedding"&& $_POST["location"]=="albraimi"){
                $sql="SELECT * FROM photographer WHERE PhotographyType='wedding' AND Location='albraimi' ";
                $result = mysqli_query($conn, $sql);
                }
                elseif($_POST["type1"]=="wedding"&& $_POST["location"]=="north albatinah"){
                    $sql="SELECT * FROM photographer WHERE PhotographyType='wedding' AND Location='north albatinah' ";
                    $result = mysqli_query($conn, $sql);
                    }

                        elseif($_POST["type1"]=="wedding"&& $_POST["location"]=="muscat"){
                            $sql="SELECT * FROM photographer WHERE PhotographyType='wedding' AND Location='muscat' ";
                            $result = mysqli_query($conn, $sql);
                            }
                            elseif($_POST["type1"]=="wedding"&& $_POST["location"]=="musandam"){
                                $sql="SELECT * FROM photographer WHERE PhotographyType='wedding' AND Location='musandam' ";
                                $result = mysqli_query($conn, $sql);
                                }
    elseif($_POST["type1"]=="official events"&& $_POST["location"]=="musandam"){
            $sql="SELECT * FROM photographer WHERE PhotographyType='official events'AND Location='musandam' ";
            $result = mysqli_query($conn, $sql);
            }
            elseif($_POST["type1"]=="official events"&& $_POST["location"]=="muscat"){
                $sql="SELECT * FROM photographer WHERE PhotographyType='official events'AND Location='muscat' ";
                $result = mysqli_query($conn, $sql);
                }
                elseif($_POST["type1"]=="official events"&& $_POST["location"]=="north albatinah"){
                    $sql="SELECT * FROM photographer WHERE PhotographyType='official events'AND Location='north albatinah' ";
                    $result = mysqli_query($conn, $sql);
                    }
                    elseif($_POST["type1"]=="official events"&& $_POST["location"]=="albraimi"){
                        $sql="SELECT * FROM photographer WHERE PhotographyType='official events'AND Location='albraimi' ";
                        $result = mysqli_query($conn, $sql);
                        }
                        elseif($_POST["type1"]=="official events"&& $_POST["location"]=="aldakhilia"){
                            $sql="SELECT * FROM photographer WHERE PhotographyType='official events'AND Location='aldakhilia' ";
                            $result = mysqli_query($conn, $sql);
                            }
                            elseif($_POST["type1"]=="official events"&& $_POST["location"]=="musandam"){
                                $sql="SELECT * FROM photographer WHERE PhotographyType='official events'AND Location='musandam' ";
                                $result = mysqli_query($conn, $sql);
                                }
                                elseif($_POST["type1"]=="official events"&& $_POST["location"]=="janoub albatinah'"){
                                    $sql="SELECT * FROM photographer WHERE PhotographyType='official events'AND Location='janoub albatinah' ";
                                    $result = mysqli_query($conn, $sql);
                                    }
                                    elseif($_POST["type1"]=="official events"){
                                        $sql="SELECT * FROM photographer WHERE PhotographyType='official events'";
                                        $result = mysqli_query($conn, $sql);
                                        }
    elseif($_POST["type1"]=="food"&& $_POST["location"]=="janoub albatinah"){
                $sql="SELECT * FROM photographer WHERE PhotographyType='food' AND Location='janoub albatinah' ";
                $result = mysqli_query($conn, $sql);
                }
                elseif($_POST["type1"]=="food"&& $_POST["location"]=="north albatinah"){
                    $sql="SELECT * FROM photographer WHERE PhotographyType='food' AND Location='north albatinah' ";
                    $result = mysqli_query($conn, $sql);
                    }
                    elseif($_POST["type1"]=="food"&& $_POST["location"]=="musandam"){
                        $sql="SELECT * FROM photographer WHERE PhotographyType='food' AND Location='musandam' ";
                        $result = mysqli_query($conn, $sql);
                        }
                        elseif($_POST["type1"]=="food"&& $_POST["location"]=="aldakhilia"){
                            $sql="SELECT * FROM photographer WHERE PhotographyType='food' AND Location='aldakhilia' ";
                            $result = mysqli_query($conn, $sql);
                            }
                            elseif($_POST["type1"]=="food"&& $_POST["location"]=="albraimi"){
                                $sql="SELECT * FROM photographer WHERE PhotographyType='food' AND Location='albraimi' ";
                                $result = mysqli_query($conn, $sql);
                                }
                                elseif($_POST["type1"]=="food"&& $_POST["location"]=="muscat"){
                                    $sql="SELECT * FROM photographer WHERE PhotographyType='food' AND Location='muscat' ";
                                    $result = mysqli_query($conn, $sql);
                                    }
    elseif($_POST["type1"]=="fashion"){
                    $sql="SELECT * FROM photographer WHERE PhotographyType='fashion' ";
                    $result = mysqli_query($conn, $sql);
     }  elseif($_POST["type1"]=="fashion"&& $_POST["location"]=="janoub albatinah"){
        $sql="SELECT * FROM photographer WHERE PhotographyType='fashion' AND Location='janoub albatinah' ";
        $result = mysqli_query($conn, $sql);
        }
        elseif($_POST["type1"]=="fashion"&& $_POST["location"]=="north albatinah"){
            $sql="SELECT * FROM photographer WHERE PhotographyType='fashion' AND Location='north albatinah' ";
            $result = mysqli_query($conn, $sql);
            }
            elseif($_POST["type1"]=="fashion"&& $_POST["location"]=="musandam"){
                $sql="SELECT * FROM photographer WHERE PhotographyType='fashion' AND Location='musandam' ";
                $result = mysqli_query($conn, $sql);
                }
                elseif($_POST["type1"]=="fashion"&& $_POST["location"]=="aldakhilia"){
                    $sql="SELECT * FROM photographer WHERE PhotographyType='fashion' AND Location='aldakhilia' ";
                    $result = mysqli_query($conn, $sql);
                    }
                    elseif($_POST["type1"]=="fashion"&& $_POST["location"]=="albraimi"){
                        $sql="SELECT * FROM photographer WHERE PhotographyType='fashion' AND Location='albraimi' ";
                        $result = mysqli_query($conn, $sql);
                        }
                        elseif($_POST["type1"]=="fashion"&& $_POST["location"]=="muscat"){
                            $sql="SELECT * FROM photographer WHERE PhotographyType='fashion' AND Location='muscat' ";
                            $result = mysqli_query($conn, $sql);
                            }
                            elseif($_POST["type1"]=="family"){
                                $sql="SELECT * FROM photographer WHERE PhotographyType='family' ";
                                $result = mysqli_query($conn, $sql);
                 }  elseif($_POST["type1"]=="family"&& $_POST["location"]=="janoub albatinah"){
                    $sql="SELECT * FROM photographer WHERE PhotographyType='family' AND Location='janoub albatinah' ";
                    $result = mysqli_query($conn, $sql);
                    }
                    elseif($_POST["type1"]=="family"&& $_POST["location"]=="north albatinah"){
                        $sql="SELECT * FROM photographer WHERE PhotographyType='family' AND Location='north albatinah' ";
                        $result = mysqli_query($conn, $sql);
                        }
                        elseif($_POST["type1"]=="family"&& $_POST["location"]=="musandam"){
                            $sql="SELECT * FROM photographer WHERE PhotographyType='family' AND Location='musandam' ";
                            $result = mysqli_query($conn, $sql);
                            }
                            elseif($_POST["type1"]=="family"&& $_POST["location"]=="aldakhilia"){
                                $sql="SELECT * FROM photographer WHERE PhotographyType='family' AND Location='aldakhilia' ";
                                $result = mysqli_query($conn, $sql);
                                }
                                elseif($_POST["type1"]=="family"&& $_POST["location"]=="albraimi"){
                                    $sql="SELECT * FROM photographer WHERE PhotographyType='family' AND Location='albraimi' ";
                                    $result = mysqli_query($conn, $sql);
                                    }
                                    elseif($_POST["type1"]=="family"&& $_POST["location"]=="muscat"){
                                        $sql="SELECT * FROM photographer WHERE PhotographyType='family' AND Location='muscat' ";
                                        $result = mysqli_query($conn, $sql);
                                        }
                                      elseif($_POST["type1"]=="product"&& $_POST["location"]=="janoub albatinah"){
                                $sql="SELECT * FROM photographer WHERE PhotographyType='product' AND Location='janoub albatinah' ";
                                $result = mysqli_query($conn, $sql);
                                }
                                elseif($_POST["type1"]=="product"&& $_POST["location"]=="north albatinah"){
                                    $sql="SELECT * FROM photographer WHERE PhotographyType='product' AND Location='north albatinah' ";
                                    $result = mysqli_query($conn, $sql);
                                    }
                                    elseif($_POST["type1"]=="product"&& $_POST["location"]=="musandam"){
                                        $sql="SELECT * FROM photographer WHERE PhotographyType='product' AND Location='musandam' ";
                                        $result = mysqli_query($conn, $sql);
                                        }
                                        elseif($_POST["type1"]=="product"&& $_POST["location"]=="aldakhilia"){
                                            $sql="SELECT * FROM photographer WHERE PhotographyType='product' AND Location='aldakhilia' ";
                                            $result = mysqli_query($conn, $sql);
                                            }
                                            elseif($_POST["type1"]=="product"&& $_POST["location"]=="albraimi"){
                                                $sql="SELECT * FROM photographer WHERE PhotographyType='product' AND Location='albraimi' ";
                                                $result = mysqli_query($conn, $sql);
                                                }
                                                elseif($_POST["type1"]=="product"&& $_POST["location"]=="muscat"){
                                                    $sql="SELECT * FROM photographer WHERE PhotographyType='product' AND Location='muscat' ";
                                                    $result = mysqli_query($conn, $sql);
                                                    }
     
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>"
                ."<th>".$row["Username"]."</th>"
                ."<th>".$row["Location"]."</th>"
                ."<th>".$row["PhotographyType"]."</th>"
                ."</tr>" ;
    
            }}
            else{
              echo"no photographer found....";
            }
            
   ?>

</tr>

</table>






    
</body>
</html>