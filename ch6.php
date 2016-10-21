<html>
<head>
<title>
Lab 6 (getimagesize())
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
<h3>Lab 6 (getimagesize())</h3>
<form enctype="multipart/form-data" action="ch6.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
Choose a file to upload: <input name="uploadedfile" type="file" />
<input type="submit" value="Upload File" />
</form>
<?php
$imageinfo = getimagesize($_FILES['uploadedfile']['tmp_name']);
if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') {
echo "Sorry, we only accept GIF and JPEG images\n";
exit;
}
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['uploadedfile']['name']);
if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $uploadfile)) {
echo "File is valid, and was successfully uploaded.\n";
} else {
echo "File uploading failed.\n";
}
?>
</div>
<a href="/fileupload">Home</a>
</body>
</html>
