<?php

backupfile('');

  function backupfile($pathbackup)
  {

    include '../hashckeck/hashbackup.php';
    include '../functionhash/configftp.php';
    date_default_timezone_set("Asia/Bangkok");
    require('bk_zip.php'); /* include zip lib */

    $name_zip_file = date("d-m-Y"); /* get date now  */
    $name_zip_file .='.zip';
    $files_to_zip = directoryToArray('../test_test/',true);

    /*Zip file*/
    $result = create_zip($files_to_zip,$name_zip_file);
    /*Transfer file via FTP */

    // $login = ftp_login($connection, $ftp_user_name, $ftp_user_pass);
    if (!$connection || !$login) { die('Connection attempt failed!'); }
       // include '../functionhash/hash.php';
       // include '../functionhash/hashbackup.php';

    $upload = ftp_put($connection, $pathbackup."/".$name_zip_file,$name_zip_file, FTP_BINARY);
    if (!$upload) { echo 'FTP upload failed!'; }
    ftp_close($connection);

    unlink($name_zip_file);

  }
?>
