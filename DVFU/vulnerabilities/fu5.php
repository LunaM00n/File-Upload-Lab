
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
       <p>-Goal for this level is about to upload a file.We are filterd php and html files.</p>
       <div class="card  teal lighten-1">
            <div class="card-content white-text">
              <span class="card-title">Level 5</span>
              <form enctype="multipart/form-data" action="fu5.php" method="POST">
                <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                <input name="uploadedfile" type="file" />
                <input type="submit" value="Upload File" />
              </form>

            </div>
            <div class="card-action">
              <?php
                    $blacklist = array(".php","html","shtml",".phtml", ".php3", ".php4",".php7");
                    foreach ($blacklist as $item) {
                    if(preg_match("/$item\$/", $_FILES['uploadedfile']['name'])) {
                    if(isset($_FILES['uploadedfile'])){echo "We do not allow HTML , PHP files\n";}
                    exit;
                    }
                    }
                    $uploaddir = 'uploads/';
                    $uploadfile = $uploaddir . basename($_FILES['uploadedfile']['name']);
                    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $uploadfile)) {
                    echo "File is valid, and was successfully uploaded.\n";
                    }
                ?>
                <?php if($uploadfile!= '') { echo "<a href=\"$uploadfile\">Uploaded</a>"; } ?>
            </div>
          </div>

     </div>

   </div>

</div>
  </body>
</html>
