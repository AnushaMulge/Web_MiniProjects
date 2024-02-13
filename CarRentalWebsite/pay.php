<?php
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="/CarRentalWebsite/css/style5.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<section class="button">
      <div class="button-contain">
      <button type="back" onclick="window.location.href='http://localhost/CarRentalWebsite/rent.php'";>Back</button> 
</div> </section>
<br><br><br><br>
    <section class="home" id="home">
      <div class="form-container">
      <?php
    if(isset($_SESSION['status'])){
      echo"<h4>".$_SESSION['status']."</h4>";
      unset($_SESSION['status']);
    }
    ?>
    <form  action="/CarRentalWebsite/config2.php" method="POST">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">User Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="uname"  placeholder="Name" >
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Payment Mode</label>
            <div class="col-sm-6">
                <input list="mode" class="form-control" name="type" placeholder="Mode type" >
                <datalist id="mode">
                            <option >CASH</option>
                            <option >UPI</option>
                        
                 </datalist>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Amount</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="cost"  placeholder="Amount" >
            </div>
        </div>

        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" name="submit" class="btn-primary">Submit</button>
            <div>
            <div class="offset-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="/carrental/rent.php">Cancel</a>
            <div>
        </div>

    </form>
    </div>
   </section>
    
   
     
    
</body>
</html>