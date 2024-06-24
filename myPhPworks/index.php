<?php
   $insert=false;
   if(isset($_POST['name1'])){
   //setting connection variables
   $server="localhost";
   $username="root";
   $password="";
   $database="TIETtravel";
   
   // creating database connection
   $connection= mysqli_connect($server, $username, $password, $database);

   //check for connection sucess
   if(!$connection){
      die("connection to this database failed due to" . mysqli_connect_error());
   } else{
    //  echo "sucsess connecting to the db";
   }

   //collectingf post variables
   $name1 = $_POST['name1'];
   $name2 = $_POST['name2'];
   $email = $_POST['email'];
   $phone  = $_POST['phone'];
   $currentyear = $_POST['currentyear'];
   $currentsem = $_POST['currentsem'];
   $info = $_POST['info']; 
   $sql="INSERT INTO `tiettravel`.`tiettravel` (`firstname`, `surname`, `email`, `phone`, `currentyear`, `currentsem`, `info`, `date`) VALUES (' $name1', '$name2', '$email',' $phone', '$currentyear',' $currentsem', '$info', current_timestamp());";
//    echo $sql;


   //execute the query
   if($connection->query($sql)==true){

        //flag for successful insertion
        $insert=true;

   } else{
         echo "ERROR: $sql <br> $connection->error";
   }

   //close the database connection
   $connection->close();

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome TIETians</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <img class="camp" src="TIETcamp.jpg" alt="TIET pics">

    <div class="container">
        <h1 class="text-center">Welcome to TIET Travel Forms</h1>
        <p class="text-center">Enter Your Details for the Travel confirmation</p>
        <?php
           if($insert){
              echo " <p class='submitMsg'>Thanks for joining with us</p>";
           }
        ?>

        <div class="row justify-content-center">
            <form action="index.php" method="post" class="col-12 col-md-6">
                <div class="mb-3">
                    <input type="text" class="form-control" name="name1" id="name1" placeholder="Enter first name">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name2" id="name2" placeholder="Enter Surname">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your Phone number">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="currentyear" id="currentyear" placeholder="Current year">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="currentsem" id="currentsem" placeholder="Current semester">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="info" id="info" cols="30" rows="10" placeholder="Any other detail"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary mx-1">Submit</button>
                    <button class="btn btn-secondary mx-1">Reset</button>
                </div>
            </form>
        </div>
    </div>

    <script src="logic.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- INSERT INTO `tiettravel` (`S no`, `First name`, `Surname`, `Email`, `Phone number`, `Current Year`, `Current Sem`, `Info`, `date`) VALUES ('1', 'random', 'namees', 'thapar@thapar.com', '9999999999', '2', '3', 'This is my first php myadmin message', current_timestamp()); -->
</body>
</html>