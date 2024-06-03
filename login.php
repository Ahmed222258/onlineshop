<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="Stylesheet" href="style-login.css">
    <title>login</title>
</head>
<body>
    <div id="header">
        <h1 id="myh1">Fabio</h1>
        <a href="http://www.mti.edu.eg/" target="_blank"> <img id="logo"src="img/MTI-Logo.png" alt="Mti-Logo"></a>
    </div>
    <div id="inputs">
        <div id="email-box">
            <form action="login.php" method="post">
            <label id="email-lbl" for="email-text"><img src="img/email.png" alt="email"></label>
            <input id="email-text"  type="text" name="mail"  required>
          
        </div>
        <div id="pass-box">
            <label for="pass-text"><img src="img/key.png" alt="key"></label>
            <input id="pass-text"   type="psw" name="psw" required>
          
        </div>
    </div>
    <div id="info">
        <label id="i-lbl" ><img src="img/info.png" alt="info">
                                <h2 id="info-text">Dont Have an acount?<a href="register.php" target="_blank">Register</a></h2>
                                </label>
    </div>
    <div id="buttons">
       <input id="login-btn"  type="submit"   name="log">
      
        <button id="cancel-btn" type="button" onclick="cancel()">Cancel</button>
    </div>
    </form>

</body>
<?php  
if (isset($_POST["log"]))
{
    $conn =new mysqli("localhost","root","","login");
	

$email = $_POST['mail'];
$password = $_POST['psw'];


$query = "SELECT * FROM users WHERE email='$email' and password='$password' ";


$result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);


if ($count == 1){

echo "Login Succefully";
header("location:first.php");
die();

}else{


    echo " Login faild";
    //echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
}
}
?>
</html>