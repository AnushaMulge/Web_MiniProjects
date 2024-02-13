<?php
 $servername ="localhost:3307";
 $username="root";
 $password="";
 $database="bloodbank1";

 $connection=new mysqli($servername,$username,$password,$database);

   
    $dname="";
    $age="";
    $weight ="";
    $phno="";
    $dobg="";
    $quantity="";
    $bbid="";
    
    $errorMessage="";
    $sucessMessage="";


  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
            
            $dname=$_POST["dname"];
            $age=$_POST["age"];
            $weight=$_POST["weight"];
            $phno=$_POST["phno"];
            $dobg=$_POST["dobg"];
            $quantity=$_POST["quantity"];
            $bbid=$_POST["bbid"];
           

            do
            {
              if(empty($dname) || empty($age) || empty($weight) || empty($phno) || empty($dobg) || empty($quantity) ||empty($bbid) )
              {
                $errorMessage="All the fields are required";
                break;
              }

              if($age <= 18 || $weight <= 50)
              {
                $errorMessage="You are not eligible to donate";
                break;
              }
           
              $sql = "INSERT INTO donor (doid,dname,age,weight,phno,dobg,quantity,bbid)"."VALUES ('$doid','$dname','$age','$weight','$phno','$dobg','$quantity','$bbid')";
              $result = $connection->query($sql);

             if(!$result)
             {
                $errorMessage="Invalid Query :".$connection->error;
             }
           

            
            $dname="";
            $age="";
            $weight ="";
            $phno="";
            $dobg="";
            $quantity="";
            $bbid="";

            $successMessage="Donor added successful";
            
            header("location:/bloodbank1/donor.php");
            exit;
        }while(false);

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br><br>
    <title>New Donor</title>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-7">
     <h2>Donor Details</h2><br>

     <?php
        if(!empty($errorMessage))
        {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
              <strong>$errorMessage</strong>
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
          </div>";
        }
      ?>

      <form method="post">
        

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Donor Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="dname" value="<?php echo $dname; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Age</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="age" value="<?php echo $age; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Weight</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="weight" value="<?php echo $weight; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Phone No.</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="phno" value="<?php echo $phno; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Donor BloodGroup</label>
            <div class="col-sm-6">
                <input list="dobg" class="form-control" name="dobg">
                <datalist id="dobg">
                            <option >O+</option>
                            <option >O-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                 </datalist>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Quantity</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="quantity" value="<?php echo $quantity; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Bloodbank Id</label>
            <div class="col-sm-6">
                <input list="BBID" class="form-control" name="bbid">
                <datalist id="BBID">
                            <option>BB1</option>
                            <option>BB2</option>
                            <option>BB3</option>
                 </datalist>
            </div>
        </div>

      
 
        <?php
        if(!empty($successMessage))
        {
            echo"<div class='row mb-3'>
              <div class='offset-sm-3 col-sm-6'>
               <div class='alert alert-success alert-dismissible fade show' role='alert'>
                 <strong>$successMessage</strong>
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
               </div>
              </div>  
            </div>";
        }
      ?>

        <div class="row mb-3">
            <div class="offset-sm-2 col-sm-2 d-grid">
                <button type="submit" class="btn-primary">Submit</button>
            </div>
        
            <div class="offset-sm-2 col-sm-2 d-grid">
                <a class="btn btn-outline-primary" href="/bloodbank1/donor.php">Cancel</a>
             </div>
        </div>

     </form>
    </div>

</body>
</html>