<?php

/*
 getfile
 unzip
 remove destination
 mkdir destination
 

*/ 
$getfilethis = getfileme('store/2018.zip', '26-08-2018.zip');

// unzipfile(localfile);
// unzipfile($getfilethis['namefile']);

/* removedirfile('/'.'ftp file');
removedirfile('/'.$getfilethis["ftppath"]);

// makedirfile('local file', 'ftp file');
makedirfile('New', $getfilethis["ftppath"]);
*/
echo "sucees";
?>