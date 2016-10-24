<html>
<head>
<title>
Lab 7 (You need Commands)
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
<h3> Lab 7 (You need Commands)</h3>
<form action="ch7.php" method="POST">
<p>Command Here</p><input type="text" name="command">
<input type="submit" value=">>">
</form>
<?php 
echo "<p>".shell_exec($_POST['command'])."</p>";
?>
</div>
<a href="/fileupload">Home</a>
</body>
</html>
