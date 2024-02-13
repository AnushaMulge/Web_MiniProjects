<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Hospital</title>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body style="margin: 50px;">
    <a class="btn btn-primary" href="/bloodbank1/admin-home.php" role="button">Back</a>
    <h1>Hospital Details</h1>
    
     <br>
     <table class="table">
       <thread>
         <tr>
            <th>Hospital ID</th>
            <th>Hospital Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Bloodbank ID</th>
         </tr>
        </thread>

         <tbody>
            <?php
            $servername ="localhost:3307";
            $username="root";
            $password="";
            $database="bloodbank1";

            $connection=new mysqli($servername,$username,$password,$database);

            if($connection->connect_error)
            {
               die("connection failed :" .$connection->connect_error);
            }

            $sql="select * from hospital";
            $result=$connection->query($sql);

            if(!$result)
            {
                die("Invalid query:".$connection->error);
            }

            while($row=$result->fetch_assoc())
            {
                echo "<tr>
                <td>".$row["hid"]."</td>
                <td>".$row["hname"]."</td>
                <td>".$row["address"]."</td>
                <td>".$row["contact"]."</td>
                <td>".$row["bbid"]."</td>
                <td>
                </tr> ";
            }
            
            ?>
         </tbody>
     </table>
</body>
</html>