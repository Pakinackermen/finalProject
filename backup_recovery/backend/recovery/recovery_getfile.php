<?php 

// getfileme('เก็บไฟล์ที่เครื่อง', 'ไฟล์ที่ดึงมา');
    function getfileme($des, $src){
 
        // include 'config/ftp.php';  
      
        $server = '127.0.0.1';
        $ftp_username ="backup";
        $ftp_password ="";
        $connection = ftp_connect($server);
      
        $login = ftp_login($connection, $ftp_username, $ftp_password);
      
        if (!$connection || !$login) { die('Connection attempt failed!'); }
        if (ftp_get($connection, $des, $src, FTP_BINARY) ) { echo "connect FTP sucess";}
      
        ftp_close($connection);
        
      
        return $src;
      }
    // getfileme('store/2018.zip', '26-08-2018.zip');
      
?>