<?php
session_start();
include("php/dbconnect.php")
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Townsville Community Music Centre - Members</title>
<meta name="description" content="With the support of the Townsville City Council, we work from an office in the Civic ... All private schools and most government schools have music teachers.">
<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- JS -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.royalslider.min.js"></script>
</head>
<!-- START Logo -->
<body>
<?php
require("php/header.php");
?>
<!-- WEBSITE LAYOUT Box -->
<div id="boxed_content" class="boxed_content">
<div class="inner">
<div class="content">
<div class="page-innter">
<div class="">
<header class="page-header">
<h1 class="page-title">Members - Registration and login</h1>
</header>
<section class="members-about">
<div class="members-about-intro">
<h3>Information about Membership</h3>
<p>There are two different types of membership: Registered Members and Paid Members. Paid membership is $25 a year and has many benefits.
<p>Features of being a registered user are:
<ul>
<li>Receive information about artists and events</li>
<li>Get mailed or emailed the Newsletter</li>
<li>Ability to post and edit ont the bulletin board.</li>
</ul>

<p>Benefits of Paid Memebership include:</p>
<ul>
<li>All of the features of Registered membership</li>
<li>Members' ticket discounts can be as high as 50% ! ! ! ! ! ! ! ! ! ! !</li>
<li>Exclusive access to artists.</li>
<li>Access to members exclusive events.</li>
<li>Your money supports the continuing fuction of the TCMC</li>
<li>The Music Centre is also registered as a Deductible Gift Recipient. Any extra donations are tax-deductible!</li>
</ul>

</div>
</section>

<section class="members-guidelines">
<h3>Membership Guidelines</h3>
<ul>
<li>No inappropiate language.</li>
<li>Always be respectful of others.</li>
<li>Have FUN!</li>

</section>
<!--
<br>
<br>


<section class="members-login-form">

<form method="get" action="index_submit" id="login">

<fieldset>
    <h3>Login</h3>
    
   	 <div> 
    	<label for="usermail">Your email address: </label>
        <br>
        <input type="email" name="usermail" placeholder="Your email here" id="usermail" required/>
     </div>
     
     <div>
     	<label for="userpass">Password: </label>
        <br>
        <input type="password" name="userpass" placeholder="*********" id="userpass" required/>
     </div>
     
     <div>
    <input type="submit" value="Login" />
    </div>
     
     <div>
     
     </div>
     </fieldset>
     </form>
     </section>
     -->


<section class="members-registration-form">
<br>
<br>
<form method="post" action="/register" id="registration">

    
    <h3>Membership Registration</h3>
   	 <div> 
    	<label for="contactname">Name: </label>
        <br>
        <input type="text" name="contactname" placeholder="Your name here" id="contactname" required/>
     </div>
     
     <div>
     	<label for="postaladdress">Postal Address: </label>
        <br>
        <textarea name="postaladdress" id="postaladdress" cols="40" rows="4" form="registration" required></textarea>
      
     </div>
     
     <div>
     	<label for="phonenumber">Phone Number: </label>
        <br>
        <input type="text" name="phonenumber" placeholder="Phone Number" id="phonenumber" required />
     </div>
     
     <div>
     	<label for="emailaddress">Email Address: </label>
        <br>
        <input type="email" name="emailaddress" placeholder="example@gmail.com" id="emailaddress" required/>
     </div>
     
      <div>
     	<label for="password">Password: </label>
        <br>
        <input type="text" name="password" placeholder="*********" id="password" required/>
     </div>
     
     <div>
		<label for="comments">We value your comments and suggestions: </label> 
        <br>
       <textarea name="comments" id="comments" cols="40" rows="4" form="registration"></textarea>
     </div>
    
    <div>
    
    <label for="terms">I have read and agree to the Membership Guidelines as stated above.</label>   <input type="checkbox" name="terms" id="terms" required/>
    </div>
    
    <div>
    <input type="submit" value="Submit" />
    </div>

    </form>
    </section>
    <br>
    <br>
    
    <section class="payment-options">
    <div>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="GCRJ28AFLXURQ" />
                    <input type="image" src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-100px.png" name="submit" alt="PayPal � The safer, easier way to pay online." />
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1" />
                     Individual membership $25 per year:  
                    </form>
                    
    </div>
    <br>
                    <div>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="67K2M93WVJM2L" />
                    <input type="image" src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-100px.png" name="submit" alt="PayPal � The safer, easier way to pay online." />
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1" />
                                       &nbsp;&nbsp;&nbsp;Tax-deductible donation:  
                    </form>
                   </div>
                    </section>
    
</div>
</div>
</div>
<?php
require("php/footer.php");
?>
</body>
</html>
