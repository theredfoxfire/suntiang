<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
 <head>
  <title>Index of html</title>
 </head>
 <body>
<?php

if ($handle = opendir('.')) {
    echo "Files:\n";
	echo '<pre>';
    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
		if(!is_dir($file)){
        echo '<a href="'.$file.'">'.$file.'</a>'."\n";
		}
    }
	echo '</pre>';

    closedir($handle);
}
?>
</body>
</html>