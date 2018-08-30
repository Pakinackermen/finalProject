<?php

date_default_timezone_set("Asia/Bangkok");

// unzip('mi.zip');
$unzipfile = '2018.zip';
unzipfile('store/'.$unzipfile);
function unzipfile($namefileunzip)
{
  $filename = '';
  echo $extractTo = dirname(__FILE__).'\store';

  // include 'configftp.php';

  $zip = new ZipArchive;
  if ($zip->open($namefileunzip) === TRUE) {
       
      echo 'Unzip.........OK';
      $zip->extractTo($extractTo);
       
       $zip->close();
  } else {
      echo 'Unzip failed';
  }
  return $filename;
}
   ?>
