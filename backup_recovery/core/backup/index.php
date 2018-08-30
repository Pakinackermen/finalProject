<div class="col-lg-6">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4 ">
    <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
      <!-- <span class="text-uppercase page-subtitle">Overview</span> -->
      <h3 class="page-title">ระบบสำรองข้อมูล</h3>
    </div>
  </div>
  <!-- End Page Header -->
  <div class="card card-small mb-4">
    <div class="card-header border-bottom">
      <h6 class="m-0">สำรองข้อมูล</h6>
    </div>

    <ul class="list-group list-group-flush">
      <li class="list-group-item p-4">
        <div class="row">
          <div class="col">

            <form action="backend\backup\backupindex.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>เลือกไดเรกทอรี่ที่ต้องการ</label>
                  <select id="pathBackup" class="form-control" name="backuppath">
                    <option value=NULL>ไดเรกทอรี่...</option>
                    <option value="/">Path 1</option>
                    <option value="Path2">Path 1</option>
                  </select>
                  </div>
                </div>
                </br>
                  <div class="form-row">                
                    <div class="form-group col-md-12">
                      <label for="feEmailAddress">ชื่อข้อมูลสำรอง</label>
                      <input type="text" class="form-control" id="nameBackup" placeholder="Email" value="<?=date('Y/m/d-H:i:s')?>"> 
                    </div>                    
                  </div>                  
                  <span class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-accent col-md-3 ">ยืนยัน</button>
                  </span>                                    
            </form>            
            </div>
            </div>
      </li>
    </ul>
    </div>
    </div>
   
  

