<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Damn Vulnerable File Upload Application</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/materialize.min.js">

    </script>
  </head>
  <body>
<div class="container">



<!-- Navbar goes here -->

   <!-- Page Layout here -->
   <div class="row">

     <div class="col s3">
       <?php include("nav.php"); ?>
     </div>

     <div class="col s9">
       <h3>Damn Vulnerable File Upload</h3>
       <p>Damn Vulnerable File Upload designed to practice File Upload Vulnerabilities. Unrestricted file 
       upload is really dangerous for Web Applications. We can upload php web shell or other malicious file through this vulnerability. You can use this lab for your teaching programs.</p>
       <b>Objectives</b>
       <p>All objectives are need to upload php file. You can use "phpinfo()" for POC.</p>
       <b>Disclaimer</b>
       <p>Do not host this application on real world! If you have something new for file upload, let me know for future challenges. </p>
     </div>

   </div>

<?php include("footer.php"); ?>
</div>
  </body>
</html>
