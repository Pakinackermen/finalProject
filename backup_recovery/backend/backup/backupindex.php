<?php

// if (!($_POST['backuppath'] == "NULL")) {
//     $pathbackup = $_POST['backuppath'];
//     backupfile($pathbackup);
// }


// include "../../config/connectDB.php";

// $result = select('setting');
//       echo $result['id_setting'];
        

backupfile('');
 
  function backupfile($pathbackup)
  {
    
    date_default_timezone_set("Asia/Bangkok");
    require('bk_zip.php'); /* include zip lib */

    $name_zip_file = date("d-m-Y"); /* get date now  */
    $name_zip_file .='.zip';
    $files_to_zip = directoryToArray('../../../', true);
   
    /*Zip file*/
    $result = create_zip($files_to_zip, $name_zip_file);
    /*Transfer file & send to store */ 

    $server = '127.0.0.1';
    $ftp_username ="backup";
    $ftp_password ="";
    $connection = ftp_connect($server);

    $login = ftp_login($connection, $ftp_username, $ftp_password);

    if (!$connection || !$login) { die('Connection attempt failed!'); }
      //  ftp_put(desination, souece)
    $upload = ftp_put($connection, $pathbackup."/".$name_zip_file,$name_zip_file, FTP_BINARY);
    if (!$upload) { echo 'FTP upload failed!'; }
    echo "sucess";
    ftp_close($connection);
   
    unlink($name_zip_file);

  }
  
?>
