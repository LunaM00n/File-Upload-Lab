
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
       <p>-Goal for this level is about to upload a file.This program restriced php files but forget something to restrict!</p>
       <div class="card  teal lighten-1">
            <div class="card-content white-text">
              <span class="card-title">Level 3</span>
              <?php
                    $files = @$_FILES["files"];
                    $info = new SplFileInfo($files["name"]);
                    $extension=($info->getExtension());
                    if ($files["name"] != '' && $extension != "php" && $extension != "php3" && $extension != "jpeg" && $extension != "png" && $extension != "gif") {
                    $fullpath = $_REQUEST["path"] . $files["name"];
                    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
                        echo "<a href='$fullpath'>OK-Click here!</a>";
                    }

                    }

                    echo '<form method=POST enctype="multipart/form-data" action=""><input type="file" name="files"><input type=submit value="Upload File"></form>';
                ?>
            </div>
            <div class="card-action">
              <?php if($fullpath!= '') { echo "File is valid, and was successfully uploaded <a href=\"$fullpath\">Uploaded</a>"; } ?>
            </div>
          </div>

     </div>

   </div>


</div>
  </body>
</html>
