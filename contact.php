
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Liyun's WEB110 Portal</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/myportal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
 </head>
 <body>
   <div class="wrapper">
   <header>
     <h1>Liyun's WEB110 Website</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="elements.html">HTML Elements</a>
       <a href="aia.html">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com">W3 Schools</a>
       <a href="http://lynda.com">Lynda Training</a>
       <a href="flowchart.html">Flowchart</a>
       <a href="fp/index.html">Final Project</a>
       <a href="contact.php">Contact Liyun</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
   </header> 
     
     <img class="desktop" src="images/desktop.jpg" alt="Desktop Image" />
       
     <img class="tablet" src="images/tablet.jpg" alt="Tablet Image" />
       
     <img class="phone" src="images/phone.jpg" alt="Phone Image" />
       
       <h2 class="subheader">Contact me</h2>
       
      <?php include "includes/simple.php";?>
      <p class="clear-recaptcha"></p>
       
     <footer>
      <p><small>&copy; 2018 by <a href="contact.php">Liyun Cecil</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p> 
    </footer> 
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>
