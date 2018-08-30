<div class="col-lg-6">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <h3 class="page-title">การตั้งค่า</h3>
    </div>
  </div>
  <!-- End Page Header -->

  <form action="core.php?page=setting" method="POST">

      <?php 
        include "setting.backup.php";
        include "setting.line.php";        
      ?>
        <div class="form-control d-flex justify-content-center">
           <button type="submit" class="btn btn-accent col-md-3 ">ยืนยัน</button>
        </div>
  </form>
  </div>

</div>
<script src="setting/setting.js"></script>
<?php
    $setting = '{"path-"'.$name.':{
                "setting_scr": 1,
                "setting_des" : 2,
                "setting_date" : {"day":"d", "mount":"m", "year":"y"},
                "setting_database" : {"user":"root", "pass": "", "databasename":"mydatabase","servername": "localhost",},
                "setting_tokenline": 5 }
              }';
    // $_POST['setting_line'];

    $settingBackup = $setting;    
    $handle = fopen("D:/test/backup.json", "wb");
    fwrite($handle, $settingBackup);
    
?>