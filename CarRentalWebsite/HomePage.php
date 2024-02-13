
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
    $successMessage="";


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
             // $sql = "INSERT INTO home (source,destination,pickdate,returndate,picktime,returntime)"."VALUES ('$source','$destination','$pickdate','$returndate','$picktime','$returntime')";
              //execute sql query
             // $result = $connection->query($sql);

                 if(isset($_POST['sub'])){
                    header("Location:/CarRentalWebsite/service.php");
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
    </header>
    <?php
        if(!empty($errorMessage))
        {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
              <strong>$errorMessage</strong>
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
          </div>";
        }
    ?>
<!--HOME-->
<section class="home" id="home">
    <div class="text">
        <h1><span>Looking</span> to <br> Rent a Car?</h1><br><br>
        <h1>You have<br> landed at <span>a right place!!</span></h1>
    </div>
    <?php
    if(isset($_SESSION['status'])){
      echo"<h4>".$_SESSION['status']."</h4>";
      unset($_SESSION['status']);
    }
    ?>
    <div class="form-container">
      
            <form action="/CarRentalWebsite/code.php" method="POST">
                <div class="input-box">
                  <span>Pick-Up Location</span>
                  <input list="search" name="pickup" id="" placeholder="Search Places">
                 <datalist id="search">
                            <option >Banglore</option>
                            <option >Mysore</option>
                            <option>Tumkur</option>
                            <option>Mandya</option>
                            <option>Hubali</option>
                            <option>Kundapura</option>
                            <option>Dharwad</option>
                            <option>Udupi</option>
                 </datalist>
                </div>
                <div class="input-box">
                  <span>Pick-Up Date</span>
                  <input type="date" name="pdate" id="">
                </div>
                <div class="input-box">
                  <span>Pick-Up Time</span>
                  <input type="time" name="ptime" id="">
                </div>
                <div class="input-box">
                    <span>Drop Location</span>
                    <input list="search" name="drop" id="" placeholder="Search Places">
                    <datalist id="search">
                            <option >Banglore</option>
                            <option >Mysore</option>
                            <option>Tumkur</option>
                            <option>Mandya</option>
                            <option>Hubali</option>
                            <option>Kundapura</option>
                            <option>Dharwad</option>
                            <option>Udupi</option>
                    </datalist>
                  </div>
                 <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="ddate" id="">
                  </div>
                  <div class="input-box">
                  <span>Drop Date</span>
                  <input type="time" name="dtime" id="">
                </div>
                  <input type="submit" name="submit" id="" class="btn">
            </form>
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