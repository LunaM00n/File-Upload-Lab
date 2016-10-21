<html>
<head>
<title>
Lab 1 (Very Simple)
</title>
<style>
body{background-color:black;}
a{color:white}
h1{color:white;text-align:center;font-size:100}
h3{color:white;}
p{color:white;text-align:right}
img{width:100;height:100;}
.lessons{text-align:center;}
</style>
</head>
<body>
<h1>Luna's <img src="image.png"> File Upload Lab</h1>
<div class="lessons">
<h3> Lab 1 (Very Simple)</h3>
<?php

$files = @$_FILES["files"];
if ($files["name"] != '') {
    $fullpath = $_REQUEST["path"] . $files["name"];
    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
        echo "<h1><a href='$fullpath'>OK-Click here!</a></h1>";
    }
}echo '<form method=POST enctype="multipart/form-data" action=""><input type="file" name="files"><input type=submit value="Up"></form>';
?>
</div>
<a href="/fileupload">Home</a>
</body>
</html>
