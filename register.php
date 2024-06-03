<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width= device-width, initial scale=1.0" />
        <title> Fabio's Registration form </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link rel="stylesheet" href = "rstyle.css" />
    </head>
    <body>
        <div id="header">
            <h1 id="myh1">Fabio</h1>
            <a href="http://www.mti.edu.eg/" target="_blank"> <img id="logo"src="img/MTI-Logo.png" alt="Mti-Logo"></a>
        </div>
        <section class= "container"> 
        <h1> Registration Form </h1>
        <form action="register.php" method="post" class = "form"> 
            <div class="input-box">
                <label> Full Name</label>
                <input type="text" placeholder="Enter full name" name="username" required />

            </div>

            <div class="input-box">
                <label> Email </label>
                <input type="text" placeholder="Enter email address" name="email" required />
            </div>

            <div class="column">
                <div class="input-box">
                    <label> Phone Number</label>
                    <input type="number" placeholder="Enter phone number" name="phone" required/>
                </div>
                <div class="input-box">
                    <label> Password</label>
                    <input type="text" placeholder="Enter password" name="password" required />
                </div>
                <div class="input-box">
                    <label> Confirm Password</label>
                    <input type="text" placeholder=" Confirm password" name="passwordr" required />
                </div>
            </div>
          
            </div>
          
            <input class="buttn" type="submit" value="sign in" name="btn">
            
        </form>
        <div id="lin"><a href="login.php"class="buttn">Back to Login</a></div>
    </section>
    
    </body>
    <?php 



if(isset($_POST["btn"])){
    if( $_POST['password'] === $_POST['passwordr'] ){
  $user=$_POST["username"];
  $phone=$_POST["phone"];
  $pass=$_POST["password"];
  $email=$_POST["email"];
  $conn =new mysqli("localhost","root","","login");

$query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";


$result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);


if ($count >= 1){

    echo " registraction faild";
}else{

    $stmt=$conn->prepare("insert into users values(?,?,?,?);");
    $stmt->bind_param("siss",$user,$phone,$pass,$email);
    $stmt->execute();
    header("location:first.php");
    die();   
    
}
}


}

  ?>
</html>