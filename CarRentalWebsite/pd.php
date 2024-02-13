<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill Form</title>
    <link rel="stylesheet" type="text/css" href="/CarRentalWebsite/style2.css">
    <link rel="stylesheet" href="/CarRentalWebsite/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<section class="button">
      <div class="button-contain">
      <button type="back" onclick="window.location.href='http://localhost/CarRentalWebsite/rent.php'";>Back</button> 
</div> </section>
    <br><br><br>
    <section class="home" id="home">
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
                </div>
            </form>
        </div>
    </section>
    
    
   
    
</body>
</html>