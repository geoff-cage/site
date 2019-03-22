<!DOCTYPE html>
<html>
<head>
<title>Enyorata Contacts</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="StyleSheet" type="text/css" href="css/site.css">
</head>

<body>
<nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <a href="#" class="logo">WASAFI</a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="index.html" class="nav-links">Home</a>
            </li>
            <li>
                <a href="services.html" class="nav-links">Services</a>
            </li>
            <li>
                <a href="about.html" class="nav-links">About</a>
            </li>
            <li>
                <a href="contact.php" class="nav-links">Contact</a>
            </li>
            
        </ul>
</nav>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="page3">
<div id="mini">
<h1 id="title">contact title </h1>
<h2 id="sub1"></h2>
</div>
<div id ="note"> 

<div id ="brief">
<p id ="major">little inquiry on reaching us</p> <br/><br/>
<p id ="min">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br/>
                 sed do eiusmod tempor incididunt ut labore et dolore magna <br/>
				 aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br/>
				 ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				 
	</div>			 
<!--<div id="six"><p id ="name"><img src="images/boss.jpeg"  id= "look" /> -->
	
	<?php
// define variables and set to empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    

  if (empty($_POST["comment"])) {
    $messageErr = "Message is required" ;
  } else {
    $comment = test_input($_POST["message"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<!---->
<div id= "mess">
<div id = "address">
<p style="padding-bottom:7px;"> Ilala- Mwanza street</p><br/><br/>
<p style="padding-bottom:7px;">P.O BOX 14078 <br/>Dar-Es-Salaam</p>
<p style="padding-bottom:7px;">Main Office: 0653996788</p>
<p style="padding-bottom:7px;">Fax: (866) 835-2626</p>
<p style="padding-bottom:7px;">Email:  ikundaharrison10@gmail.com</p>

</div>
<div id ="sms">
<p><span class="error"> </span></p><br/>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <p style="padding-bottom:7px;">Name</p>
  <input type="text" name="name">
  <span class="error"></span>
  <br><br>
 <p style="padding-bottom:7px;">Phone</p>
  <input type="text" name="name" >
  <span class="error"></span>
  <br><br>
  <p style="padding-bottom:7px;">E-mail</p>
  <input type="text" name="email">
  <span class="error"></span>
  <br><br>
  <p style="padding-bottom:7px;">Message</p>
  <textarea name="message" rows="5" cols="40"></textarea>
  <span class="error"></span>
  <br><br>
  <input type="submit" name="submit" class="submit" value="Submit">  
</form>

</div>






</div>


	
</div>














</div>

<div id="contact4"> 
<div id="social4">
<i><img src="images/fb.png"  id="soc" /></i>
<i><img src="images/instagram.png" id="soc" /></i>
<i><img src="images/twitter.png" id="soc" /></i>
</div>
</div>
</div> <!---->
</body>
</html>
