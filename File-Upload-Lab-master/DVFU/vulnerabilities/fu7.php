
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Damn Vulnerable File Upload Application</title>
    <link rel="stylesheet" href="../css/materialize.min.css">
    <script src="../js/materialize.min.js">

    </script>
  </head>
  <body>
<div class="container">

  <?php error_reporting(0); ?>

<!-- Navbar goes here -->

   <!-- Page Layout here -->
   <div class="row">

     <div class="col s3">
       <?php include("nav1.php"); ?>
     </div>

     <div class="col s9">
       <h3>Damn Vulnerable File Upload</h3>
       <b>Description</b>
       <p>-Goal for this level is about to learn File Name XSS.</p>
       <div class="card  teal lighten-1">
            <div class="card-content white-text">
              <span class="card-title">Level 7</span>
              <?php

              $files = @$_FILES["files"];
              if ($files["name"] != '') {
                  $fullpath = $_REQUEST["path"] . $files["name"];
                  $filename=$files["name"];
                  if (move_uploaded_file($files['tmp_name'], $fullpath)) {
                      echo "Uploaded ".$filename;
                  }
                  else
                  echo "Error with this file".$filename;
              }
              echo '<form method=POST enctype="multipart/form-data" action="">
                      <input type="file" name="files">
                      <input type=submit value="Upload File"></form>';

              ?>
            </div>
            <div class="card-action">
              
            </div>
          </div>

     </div>

   </div>

</div>
  </body>
</html>
