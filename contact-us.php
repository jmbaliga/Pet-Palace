
<!doctype html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143266012-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-143266012-1');
    </script>

    <title>Julie Baliga - Paul's Pet Palace</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lobster+Two&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9abc6f4c0d.js"></script>
    <link href="css/slides.css" rel="stylesheet" type="text/css" />
</head>

<body class="style2.css">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

    <div id="wrapper">
        <nav class="topnav" id="myNavigation">
            <a href="index.html"><i class="fas fa-paw"></i> Paul's Pet Palace</a>
            <a href="about-us.html">About Us</a>
            <div class="dropdown">
                <button class="dropbtn">
                    Pets
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="dogs.html"><i class="fas fa-dog"></i> Dogs</a>
                    <a href="cats.html"><i class="fas fa-cat"></i> Cats</a>
                    <a href="birds.html"><i class="fas fa-crow"></i> Birds</a>
                </div>
            </div>
            <a href="contact-us.html"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
        
       <main  class="bg-img">
      
				

				<section class="thankyou">
					 <header class="blockheader" class="container">
							 <h2 <a name="thankyou">Thank you for your submission!</h2>
					 </header>

			 </section>
<<?php
if(!isset($_POST['submit']))
{

	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'stardreamed@gmail.com';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n".
    "Here is the message:\n $message\n $date\n $website\n $favcolor\n".

$to = "stardreamed@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</main>
        <footer>
            <p>© Copyright 2019 <a href="mailto:julie.baliga@gmail.com">Julie M. Baliga</a></p>
        </footer>
        <script type="text/javascript" src="js/nav2.js"></script>
        <script type="text/javascript" src="js/slides2.js"></script>
    </div>
</body>

</html>
