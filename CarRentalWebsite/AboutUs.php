<?php
    $servername ="localhost:3307";
    $username="root";
    $password="";
    $database="CarRentalWebsite";

    $connection=new mysqli($servername,$username,$password,$database);

    $source="";
    $destination="";
    $pickdate="";
    $returndate="";
    $picktime="";
    $returntime ="";

    $errorMessage="";
    $sucessMessage="";


  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    //retain previous values
            $source=$_POST["source"];
            $destination=$_POST["destination"];
            $pickdate=$_POST["pickdate"];
            $returndate=$_POST["returndate"];
            $picktime=$_POST["picktime"];
            $returntime=$_POST["returntime"];

            do
            {
              if( empty($source) )
              {
                $errorMessage="Source location is required";
                break;
              }

              //$sql = "INSERT INTO home (source,destination,pickdate,returndate,picktime,returntime)"."VALUES ('$source','$destination','$pickdate','$returndate','$picktime','$returntime')";
              //execute sql query
             //$result = $connection->query($sql);

                 if(isset($_POST['sub'])){
                    header("Location:services.php");
                 }

              if(!$result)
              {
                  $errorMessage="Invalid Query :".$connection->error;
              }
            }while(false);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Website</title>
</head>
<body>
    <link rel="stylesheet" href="/CarRentalWebsite/Hstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <header>
        <a href="#" class="logo"><img src="/CarRentalWebsite/Images/logo.jpeg" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="/CarRentalWebsite/HomePage.php">Home</a></li>
            <li><a href="/CarRentalWebsite/AboutUs.php">About</a></li>
            <li><a href="/CarRentalWebsite/service.php">Services</a></li>
            <li><a href="/CarRentalWebsite/gallery.php">Gallery</a></li>
            <li><a href="/CarRentalWebsite/contact.php">Contact</a></li>
        </ul>
        <div class="header-btn">
            <a href="/CarRentalWebsite/register.php" class="sign-up">Sign Up</a>
            <a href="/CarRentalWebsite/loginform.php" class="sign-in">Sign In</a>
        </div>
    </header><br><br><br>
    
    <section>
        <div class="Intro">
            <div class="gallery-section">
            <img src="/CarRentalWebsite/Images/20230102054522_Sorento.jpg" alt="">
            <img src="/CarRentalWebsite/Images/Honda Accord coupe1.jpg"alt="">
            <img src="/CarRentalWebsite/Images/ford explorer.jpeg" alt="">
            <img src="/CarRentalWebsite/Images/Kia Sorento1.jpg" alt="">
            <img src="/CarRentalWebsite/Images/Chevrolet Camaro ZL1 sports.jpg" alt="">
            <img src="/CarRentalWebsite/Images/honda civic sedan2.jpg" alt="">
            <img src="/CarRentalWebsite/Images/ford explorer1.jpeg" alt="">
            <img src="/CarRentalWebsite/Images/Nissan 370Z coupe.jpg" alt="">
            <span class="button-contain">
                <button type="view more" onclick="window.location.href='/CarRentalWebsite/gallery.php' ";>View More</button>
            </span>
        </div>
        </div>

    </section>
    <?php
        if(!empty($errorMessage))
        {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
              <strong>$errorMessage</strong>
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
          </div>";
        }
    ?>
    <section class="trip" id="trip">
        <div class="Trip">
            <div class="form-container">
                <form action="" method="post">
                    <div>
                    <div class="input-box">
                        <span>Source</span>
                        <input type="source" name="source" id="" placeholder="Search Places">
                        <datalist id="source">
                            <option >Bangalore</option>
                            <option >Mysore</option>
                            <option>Tumkur</option>
                            <option>Mandya</option>
                            <option>Hubali</option>
                            <option>Kundapura</option>
                            <option>Dharwad</option>
                            <option>Udupi</option>
                            <option>Kalaburgi</option>
                            <option>Shivamogga</option>
                 </datalist>
                    </div>
                    <div class="input-box">
                        <span>Destination</span>
                        <input type="destination" name="destination" id="" placeholder="Search Places">
                        <datalist id="destination">
                            <option >Banglore</option>
                            <option >Mysore</option>
                            <option>Tumkur</option>
                            <option>Mandya</option>
                            <option>Hubali</option>
                            <option>Kundapura</option>
                            <option>Dharwad</option>
                            <option>Udupi</option>
                            <option>Kalaburgi</option>
                            <option>Shivamogga</option>
                 </datalist>
                    </div>
                    </div>
                    <div>
                    <div class="input-box">
                        <span>Pick-Up Date</span>
                        <input type="date" name="pickdate" id="">
                    </div>
                    <div class="input-box">
                        <span>Return Date</span>
                        <input type="date" name="returndate" id="">
                    </div>
                    </div>
                    <div>
                    <div class="input-box">
                        <span>Pick-Up Time</span>
                        <input type="time" name="picktime" id="">
                    </div>
                    <div class="input-box">
                        <span>Return Time</span>
                        <input type="time" name="returntime" id="">
                    </div></div>
                    <?php
        if(!empty($successMessage))
        {
            echo "<div class='row mb-3'>
              <div class='offset-sm-3 col-sm-6'>
               <div class='alert alert-success alert-dismissible fade show' role='alert'>
                 <strong>$successMessage</strong>
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
               </div>
              </div>  
            </div>";
        }
        ?>
                    <input type="submit" name="sub" id="" class="btn">
                </form>
            </div>
        </div>
    </section>
    
        <section class="ride" id="ride">
            <div class="special">
            <div class="heading">
                <span>How It Works<br><br></span>
                <h1>Rent With 3 Easy Steps</h1>
            </div>
            <div class="ride-container">
                <div class="box">
                    <i class='bx bxs-map' ></i>
                    <h2>Choose A Location</h2>
                    <p>Enter your preferred location where you would like to rent the car from.
                         The car would be made avalilable at your desired location.</p>           
                </div>
                <div class="box">
                    <i class='bx bxs-calendar-check'></i>
                    <h2>Pick-Up Date</h2>
                    <p>Enter the date when you would like to rent the car. The car would be available as per your convenience as the given date and time.</p>                
                </div>
                <div class="box">
                    <i class='bx bxs-calendar-star' ></i>
                    <h2>Book A Ride</h2> 
                    <p>Book the car which suits your travel and comfort. Our Car Rental Services provides various options and the best cars around the world.</p>               
                </div>
            </div>
            </div>
        </section>

        <section class="branch" id="branch">
            <div class="heading">
                <span>Branches<br><br></span>
                <h1>For Your Service At Your Place</h1>
            </div>
            <div class="branches">
                <div class="bx">
                    <i class='bx bx-map' ></i>
                    <h2>Bengaluru</h2>            
                </div>
                <div class="bx">
                    <i class='bx bx-map' ></i>
                    <h2>Mysuru</h2>            
                </div>
                <div class="bx">
                    <i class='bx bx-map' ></i>
                    <h2>Dharwad</h2>            
                </div>
                <div class="bx">
                    <i class='bx bx-map' ></i>
                    <h2>Hubali</h2>            
                </div>
                <div class="bx">
                    <i class='bx bx-map' ></i>
                    <h2>Kundapura</h2>            
                </div>
                <div class="bx">
                    <i class='bx bx-map' ></i>
                    <h2>Kalaburgi</h2>            
                </div>
                <div class="bx">
                    <i class='bx bx-map' ></i>
                    <h2>Shivamogga</h2>            
                </div>
                <div class="bx">
                    <i class='bx bx-map' ></i>
                    <h2>Udupi</h2>            
                </div>
                <div class="bx">
                    <i class='bx bx-map' ></i>
                    <h2>Mandya</h2>            
                </div>
                <div class="bx">
                    <i class='bx bx-map' ></i>
                    <h2>Tumkur</h2>            
                </div>
            </div>
        </section>
    
    <footer>
        <div class="container">
            <div class="row">
              <div class="col-lg-3 col-xs-12">
                <h4><br>Contact Us</h4>
                <ul class="list-unstyled">
                  <li>
                    <p>
                      <i class="bx bxs-home"></i> Address: 1234, JSSATEB,
                      Bangalore, Karnataka, India
                    </p>
                  </li>
                  <li>
                    <p><i class='bx bx-phone' ></i> Phone: +91 1234567890</p>
                  </li>
                  <li>
                    <p>
                        <i class='bx bx-envelope' ></i> Email:
                      <a href="mailto:info@carrental.com">info@carrental.com<br><br></a>
                    </p>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-xs-12">
                <h4>About Us</h4>
                <p>
                  Car Rental is a leading provider of rental cars in the JSSATEB.<br>
                  With a wide selection of vehicles and competitive pricing,<br> we're
                  dedicated to providing our customers with the best rental<br> car
                  experience possible.<br><br>
                </p>
              </div>
              <div class="col-lg-3 col-xs-12">
                <h4>Our Services</h4>
                <ul class="list-unstyled">
                  <li><a href="#">Car Rental</a></li>
                  <li><a href="#">Chauffeur Services</a></li>
                  <li><a href="#">Airport Transfers<br></a></li>
                </ul>
              </div>
            </div>
          </div>

        <div><br>
        <h4>copyright@CarRentalServices</h4>
        <p align="center"><a href="/CarRentalWebsite/logout.php"><font color="blue">Logout</a></p>
        </div>
    </footer>
    </body>     
</html>