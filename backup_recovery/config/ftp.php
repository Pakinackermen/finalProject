<?php 
    function ftp_server($server, $ftp_username, $ftp_password){
    /*
    $server = '127.0.0.1';
    $ftp_username ="ming";
    $ftp_password =""; 
    */
    $connection = ftp_connect($server);
    $login = ftp_login($connection, $ftp_username, $ftp_password);
    }
?>