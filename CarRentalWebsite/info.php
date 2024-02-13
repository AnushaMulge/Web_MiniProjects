<?php
  session_start();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" type="text/css" href="/CarRentalWebsite/style2.css">
    <link rel="stylesheet" href="/CarRentalWebsite//css/style5.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   
</head>
<body>
<section class="button">
      <div class="button-contain">
      <button type="back" onclick="window.location.href='http://localhost/CarRentalWebsite/rent.php'";>Back</button> 
</div> </section>
    <br><br><br>
    <br><br><br>
    <section class="home" id="home">
   
    <div class="form-container">
    <?php
    if(isset($_SESSION['status'])){
      echo"<h4>".$_SESSION['status']."</h4>";
      unset($_SESSION['status']);
    }
    ?>
    <form action="/CarRentalWebsite/config.php" method="POST">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">User Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="uname"  placeholder="User Name" >
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">User Age</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="uage"  placeholder="Age" >
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="gender"  placeholder="Gender" >
            </div>
            
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="phone"  placeholder="Phone No." >
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="address" placeholder="Address" >
            </div>
        </div>

       
       <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" name="save" class="btn-primary">Submit</button>
            <div>
            <div class="offset-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="/CarRentalWebsite/rent.php">Cancel</a>
            <div>
        </div>

     </form>
  </div>
  </section>
    
    
</body>
</html>