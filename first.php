<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Odor+Mean+Chey&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="style-login.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="products.css">
    <link rel="stylesheet" href="new_page.css">

    <title>Home</title>
</head>
<body>

      <!-- Email -->  <div id="pop-up">
        <div id="bacground"></div>
        <div class="pop-up-content"><div id="header">
            <h1 id="myh1">Fabio</h1>
            <a href="http://www.mti.edu.eg/" target="_blank"> <img id="logo"src="img/MTI-Logo.png" alt="Mti-Logo"></a>
        </div>
        <div id="inputs">
            <div id="email-box">
                <label id="email-lbl" for="email-text"><img src="img/email.png" alt="email"></label>
                <input id="email-text"   type="text" required>
            </div>
            <div id="pass-box">
                <label for="pass-text"><img src="img/key.png" alt="key"></label>
                <input id="pass-text"   type="password" required>
            </div>
        </div>
        <div id="info">
            <label id="i-lbl" ><img src="img/info.png" alt="info">
                                    <h2 id="info-text">Dont Have an acount?<a href="register.html" target="_blank">Register</a></h2>
                                    </label>
        </div>
        <div id="buttons">
            <button id="login-btn" type="button" onclick="login()">Login</button>
            <button id="cancel-btn" type="button" onclick="cancel()">Cancel</button>
        </div></div>
    </div>
    <!-- Navigation Bar --><header id="nav">
        <div id="logo"><a href=""><h1 id="animation">Fabio</h1></a></div>
        
        <div id="pages">
        
            <ul>
                
                <li><a id="new" >Coming Soon</a>
                    <div id="l1" class="line"></div></li>
                
                <li><a id="hoodie">Hoodie</a>
                    <div id="l2" class="line"></div></li></li>
                <li><a id="shirt">T-shirt</a>
                    <div id="l3" class="line"></div></li></li>
                <li><a id="summer" href="" style="display:none">Summer</a>
                    <div id="l4" class="line"></div></li></li>
                <li id="login" class="login-class" style="display:none">Login</li>
            </ul>
            <div id="icons">
                <a  id="heart"><img src="img/heart.png" alt="img" style="display:none"></a>
                <a id="cart"><img src="img/cart.png" alt="img"></a>
                <a id="acc"><img src="img/acc.png" alt="img" style="display:none"></a>
            </div>
            
        </div>
        <div id="cart-cont" class="cart-container">
            <div id="cart-page" class="cart-content">


            </div>
            <h3 id="total">Total Price:</h3>
            <button id="buy-btn" class="buy">Place Order</button>
        </div>
        <div id="toggle">
            <div id="bar"></div>
            <div id="bar"></div>
            <div id="bar"></div>
        </div>
    </header>
     <!-- bg min page -->
     <div id="bg-main"><img id="new_img" src="img/bg.jpg" alt="bg"></div>


      <!-- new -->
      <div id="new_page">
        <div id="bg_new">
          <span id="first"> <img src="img/new_shirt1.png" alt="shirt 1"> </span>
        </div>
        <div id="bg_new2"><span id="second"> <img src="img/new_shirt2.png" alt="shirt 1"> </span></div>
      </div>
         <!-- Hoodies -->
    <main id="hoodi" class="hoodies">     
        <div class="product-items-container" >
            <!-- hoodie 1 -->
          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
          <div class="item-layer">
              <img src="img/hoodie-1.png"  >
          </div>
          <h4 class="item-name">Black Hoodie</h4>
          <p class="item-price">LE 677</p>           
          <div onclick="openForm()" id="btn1" class="button">Add to Cart</div>
          <form id="myForm" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn">
</form>
<script>
function openForm() {
   document.getElementById("myForm").style.display = "block";
}
</script>
<?php
if(isset($_POST["btn"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];
    $id=1;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();

}
else{
}
  }
?>
          <!-- hoodie 2 -->
        </div>
          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
          <div class="item-layer">
              <img src="img/hoodie-2.png" >
          </div>
          <h4 class="item-name">Dark Green Hoodie</h4>
          <p class="item-price">LE 677</p>
          <div onclick="openForm1()" id="btn2" class="button">Add to Cart</div>
          <form id="myForm1" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn1">
</form>
<script>
function openForm1() {
   document.getElementById("myForm1").style.display = "block";
}
</script>
<?php
if(isset($_POST["btn1"])){
  
  
   $pass=$_POST["password"];
   $email=$_POST["email"];
   $id=2;
  
   $conn =new mysqli("localhost","root","","login");
   $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
   $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
 $stmt=$conn->prepare("insert into saless values(?,?);");
 $stmt->bind_param("si",$email,$id);
 $stmt->execute();
}
else{

}
 }

?>
        </div>
        <!-- hoodie 3 -->
          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
          <div class="item-layer">
              <img src="img/hoodie-3.png" >
          </div>
          <h4 class="item-name">White Hoodie</h4>
          <p class="item-price">LE 677</p>
          <form> 
            <div>
                <a onclick="openForm2()" class="button">Add to Cart</a>
          </div>
        </form>
        <form id="myForm2" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn2">
</form>
        <script>
function openForm2() {
    document.getElementById("myForm2").style.display = "block";
}
    

</script>
<?php
if(isset($_POST["btn2"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];
    $id=3;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>
        </div>
                <!-- hoodie 4 -->

          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
          <div class="item-layer">
              <img src="img/hoodie-4.png" >
          </div>
          <h4 class="item-name">Red Hoodie</h4>
          <p class="item-price"> LE 677</p>
          <form> 
            <div>
                <a onclick="openForm3()" class="button">Add to Cart</a>
          </div>
        </form>
        <form id="myForm3" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn3">
</form>
<script>
function openForm3() {
    document.getElementById("myForm3").style.display = "block";
}
</script>
<?php
if(isset($_POST["btn3"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];
    $id=4;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>

        </div>

          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
          <div class="item-layer">
              <img src="img/hoodie-5.png" >
          </div>
          <h4 class="item-name">Red Hoodie (White logo)</h4>
          <p class="item-price">LE 677</p> 
            <div>
                <a onclick="openForm4()" class="button">Add to Cart</a>
          </div>
          <form id="myForm4" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn4">
</form>
<script>
function openForm4() {
   document.getElementById("myForm4").style.display = "block";
}
</script>
<?php
if(isset($_POST["btn4"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];
    $nu=1;
    $id=5;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>
        </div>

          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
          <div class="item-layer">
              <img src="img/hoodie-6.png" >
          </div>
          <h4 class="item-name">Green Hoodie</h4>
          <p class="item-price">LE 677</p>
            <div>
                <a onclick="openForm5()"class="button">Add to Cart</a>
          </div>

          <form id="myForm5" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn5">
</form>
<script>
function openForm5() {
   document.getElementById("myForm5").style.display = "block";
}
</script>
<?php
if(isset($_POST["btn5"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];
    $id=6;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>
        </div>

        <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
            <div class="item-layer">
                <img src="img/hoodie-7.png" >
            </div>
            <h4 class="item-name">Yellow Hoodie</h4>
            <p class="item-price">LE 677</p> 
                <div>
                    <a onclick="openForm6()" class="button">Add to Cart</a>
                </div>

                <form id="myForm6" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn6">
</form>
<script>
function openForm6() {
   document.getElementById("myForm6").style.display = "block";
}
</script>
<?php
if(isset($_POST["btn6"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];
   
    $id=7;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>
          </div>

          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
            <div class="item-layer">
                <img src="img/hoodie-8.png" >
            </div>
            <h4 class="item-name">Blue Hoodie</h4>
            <p class="item-price">LE 677</p>
                <div>
                <a onclick="openForm7()" class="button">Add to Cart</a>
              </div>
              <form id="myForm7" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn7">
</form>
<script>
function openForm7() {
   document.getElementById("myForm7").style.display = "block";
}
</script>
<?php
if(isset($_POST["btn7"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];

    $id=8;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>
          </div>
          
        </div>
      
    </main>
    <!-- T-shirts -->
    <main id="shrt" class="shirts">     
        <div class="product-items-container" >
                <!-- T-shirt 1-->

          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
          <div class="item-layer">
              <img src="img/shirt-1.png"  >
          </div>
          <h4 class="item-name">Blue T-shirt</h4>
          <p class="item-price">LE 300</p> 
            <div>
                <a   onclick="openForm8()" class="button">Add to Cart</a>
          </div>
          <form id="myForm8" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn8">
</form>
<script>
function openForm8() {
   document.getElementById("myForm8").style.display = "block";
}
</script>
<?php
if(isset($_POST["btn8"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];

    $id=9;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>
        </div>
                        <!-- T-shirt 2-->

          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
          <div class="item-layer">
            <img src="img/shirt-2.png"  >
        </div>
        <h4 class="item-name">Black T-shirt</h4>
        <p class="item-price">LE 300</p> 
            <div>
                <a  onclick="openForm9()" class="button">Add to Cart</a>
          </div>
          <form id="myForm9" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn9">
</form>
<script>
function openForm9() {
   document.getElementById("myForm9").style.display = "block";
}
</script>
<?php
if(isset($_POST["btn9"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];
  
    $id=10;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>
        </div>
                        <!-- T-shirt 3-->

          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
          <div class="item-layer">
            <img src="img/shirt-3.png"  >
        </div>
        <h4 class="item-name">White T-shirt</h4>
        <p class="item-price">LE 300</p> 
            <div>
                <a onclick="openForm10()" class="button">Add to Cart</a>
          </div>
          <form id="myForm10" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn10">
</form>
<script>
function openForm10() {
   document.getElementById("myForm10").style.display = "block";
}
</script>


<?php
if(isset($_POST["btn10"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];
 
    $id=11;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>
        </div>

                        <!-- T-shirt 4-->
          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
          <div class="item-layer">
            <img src="img/shirt-4.png"  >
        </div>
        <h4 class="item-name">Orange T-shirt</h4>
        <p class="item-price"> LE 300</p> 
            <div>
                <a onclick="openForm11()" class="button">Add to Cart</a>
          </div>

          <form id="myForm11" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn11">
</form>
<script>
function openForm11() {
   document.getElementById("myForm11").style.display = "block";
}
</script>
<?php
if(isset($_POST["btn11"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];

    $id=12;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>
        </div>

                                <!-- T-shirt 5-->
          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
          <div class="item-layer">
            <img src="img/shirt-5.png"  >
        </div>
        <h4 class="item-name">Black T-shirt (Small logo)</h4>
        <p class="item-price">LE 300</p>
            <div>
                <a  onclick="openForm12()" class="button">Add to Cart</a>
          </div>     
          
          <form id="myForm12" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn12">
</form>
<script>
function openForm12() {
   document.getElementById("myForm12").style.display = "block";
}
</script>

<?php
if(isset($_POST["btn12"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];
   
    $id=13;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>
        </div>
                                          <!-- T-shirt 6-->

          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
          <div class="item-layer">
            <img src="img/shirt-6.png"  >
        </div>
        <h4 class="item-name">Yellow T-shirt</h4>
        <p class="item-price">LE 300</p>
            <div>
                <a  onclick="openForm13()" class="button">Add to Cart</a>
          </div>

          <form id="myForm13" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn13">
</form>
<script>
function openForm13() {
   document.getElementById("myForm13").style.display = "block";
}
</script>

<?php
if(isset($_POST["btn13"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];
   
    $id=14;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>

        </div>
                                          <!-- T-shirt 7-->

        <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
            <div class="item-layer">
                <img src="img/shirt-7.png"  >
            </div>
            <h4 class="item-name">White T-shirt</h4>
            <p class="item-price">LE 300</p> 
                <div>
                    <a  onclick="openForm14()" class="button">Add to Cart</a>
                </div>

                <form id="myForm14" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn14">
</form>
<script>
function openForm14() {
   document.getElementById("myForm14").style.display = "block";
}
</script>


<?php
if(isset($_POST["btn14"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];
  
    $id=15;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>
          </div>
                                            <!-- T-shirt 8-->

          <div class="item"style="color:darkblue;border-right: 1px solid darkblue;">
            <div class="item-layer">
                <img src="img/shirt-8.png"  >
            </div>
            <h4 class="item-name">Red T-shirt</h4>
            <p class="item-price">LE 300</p>
                <div>
                <a onclick="openForm15()" class="button">Add to Cart</a>
              </div>
              <form id="myForm15" action="first.php" method="post" style="display:none;">
   
   <input type="text" placeholder="Name" name="email" required><br>
   <input type="text" placeholder="password" name="password" required><br>
   <input type="submit" value="submit" name="btn15">
</form>
<script>
function openForm15() {
   document.getElementById("myForm15").style.display = "block";
}
</script>
<?php
if(isset($_POST["btn15"])){
   
   
    $pass=$_POST["password"];
    $email=$_POST["email"];

    $id=16;
   
    $conn =new mysqli("localhost","root","","login");
    $query = "SELECT * FROM users WHERE email='$email' and password='$pass' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
  $stmt=$conn->prepare("insert into saless values(?,?);");
  $stmt->bind_param("si",$email,$id);
  $stmt->execute();
  echo "done";

}
else{

    echo"not reg";
}
  }

?>
          </div>
        </div>
      
    </main>
    <script src="nav.js"></script>
    <script src="pages.js"></script>
    <script src="cart.js"></script>

</body>
</html>