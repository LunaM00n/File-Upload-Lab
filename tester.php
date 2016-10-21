
<?php

$info = new SplFileInfo('ch1.php');
var_dump($info->getExtension());

?>


<?php
echo mime_content_type('ch1.php') . "\n";
echo mime_content_type('ch2.php');
?>



<?php

echo filetype('/etc/passwd');  // file
echo filetype('/etc/');        // dir

?>



<?php

// outputs e.g.  somefile.txt: 1024 bytes

$filename = 'ch1.php';
echo $filename . ': ' . filesize($filename) . ' bytes';

?>


<?php
$info = new SplFileInfo('ch1.php');
var_dump($info->isExecutable()); 

?>


