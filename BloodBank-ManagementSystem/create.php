<?php
    $servername ="localhost:3307";
    $username="root";
    $password="";
    $database="bloodbank1";

    $connection=new mysqli($servername,$username,$password,$database);

    $pname="";
    $age="";
    $gender="";
    $phno ="";
    $address="";
    $pbg="";
    $did="";
    $hid="";

    $errorMessage="";
    $sucessMessage="";


  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    //retain previous values
            $pname=$_POST["pname"];
            $age=$_POST["age"];
            $gender=$_POST["gender"];
            $phno=$_POST["phno"];
            $address=$_POST["address"];
            $pbg=$_POST["pbg"];
            $did=$_POST["did"];
            $hid=$_POST["hid"];

            do
            {
              if( empty($pname) || empty($age) || empty($gender) || empty($phno) || empty($address) || empty($pbg) || empty($did) || empty($hid) )
              {
                $errorMessage="All the fields are required";
                break;
              }
              

              $sql = "INSERT INTO patient (pname,age,gender,phno,address,pbg,did,hid)"."VALUES ('$pname','$age','$gender','$phno','$address','$pbg','$did','$hid')";
              //execute sql query
              $result = $connection->query($sql);

             if(!$result)
             {
                $errorMessage="Invalid Query :".$connection->error;
             }

            $pname="";
            $age="";
            $gender="";
            $phno ="";
            $address="";
            $pbg="";
            $did="";
            $hid="";

            $successMessage="Patient added successful";

            header("location:/bloodbank1/index.php");
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
    <title>New Patient</title>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-8">
     <h2>Patient Details</h2><br>

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
            <label class="col-sm-3 col-form-label">Patient Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="pname" value="<?php echo $pname; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Age</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="age" value="<?php echo $age; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="gender" value="<?php echo $gender; ?>">
            </div>
            
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="phno" value="<?php echo $phno; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">PBG</label>
            <div class="col-sm-6">
                <input list="pbg" class="form-control" name="pbg">
                <datalist id="pbg">
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
            <label class="col-sm-3 col-form-label">DID</label>
            <div class="col-sm-6">
                <input list="did" class="form-control" name="did">
                <datalist id="did">
                            <option>D1</option>
                            <option>D2</option>
                            <option>D3</option>
                            <option>D4</option>
                            <option>D5</option>
                 </datalist>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">HID</label>
            <div class="col-sm-6">
                <input list="hid" class="form-control" name="hid">
                <datalist id="hid">
                            <option>H1</option>
                            <option>H2</option>
                            <option>H3</option>
                            <option>H4</option>
                            <option>H5</option>
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
                <a class="btn btn-outline-primary" href="/bloodbank1/index.php">Cancel</a>
             </div>
        </div>

     </form>
    </div>

</body>
</html>