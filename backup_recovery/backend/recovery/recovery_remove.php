<?php
    // remotedirfile('/Pro2');
function removedirfile($va_string)
{
    include 'configftp.php';

    foreach ($contents = ftp_nlist($connection, $va_string) as $deldir) {
        // ftp_chdir($connection, $deldir);
        if (is_dir("ftp://$ftp_user_name:$ftp_user_pass@$server".$deldir)) {
            removedirfile($deldir);
        ftp_rmdir($connection, $deldir );
        echo "<div style='font-family: monospace;'>Remote Folder>> ".basename($deldir)."............OK</div>";
        }
        if ( is_file("ftp://$ftp_user_name:$ftp_user_pass@$server".$deldir) ) {
            ftp_delete($connection, $deldir);
            echo "<div style='font-family: monospace;'>Delete File>> ".basename($deldir)."............OK</div>";
        }

        // echo $deldir.".....del<br>";
        // echo dirname($deldir)."<br>";
        // echo basename($deldir)."<br>";
    }
    ftp_close($connection);
    return 0;
}

?>