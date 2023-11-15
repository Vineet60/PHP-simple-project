<?php 
$insert=false;
if (isset($_POST['name'])) {
    $name = $_POST['name'];
   $submit=true;
}
$server="localhost";
$username="root";
$password="";
$database="trip";

$conn=mysqli_connect($server,$username,$password,$database,3307);
if (!$conn) {
    die("Somethingg Went wrong pls check it!". mysqli_connect_error());
}
//echo"Successfully connected bro";

$name= $_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone =$_POST['phone'];
$desc=$_POST['desc'];

$sql= "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

//echo $sql;

if ($conn->query($sql)==true) {
  // echo"Successfully inserted";
  $insert =true;
}
else{
    echo"ERROR:$sql <br> $conn->error";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
</head>
<body>
    <img class="bg" src="s1.jpg" alt="">
    <div class="container">
        <h1>Welcome to your site</h1>
        <p>Enter ur details for the conformation</p>
      <?php 
      if ($insert==true) {
       
      echo " <p class='submitmsg'>Thanks for submiting the form we will see u later..</p>";
     }
      ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="desc" id="desc" cols="30" placeholder="Enter any other info here" rows="10" ></textarea>
            <button class="btn">Submit</button>
        </form></div>
        <!-- <form method="POST" action="index.php">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            
            <label for="gender">Gender:</label>
            <input type="text" name="gender" id="gender">
            
            <label for="age">Age:</label>
            <input type="text" name="age" id="age">
            
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
            
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone">
            
            <label for="desc">Description:</label>
            <textarea name="desc" id="desc"></textarea>
            
            <input type="submit" value="Submit">
        </form> -->
    
    <script src="index.js"></script>

</body>
</html>