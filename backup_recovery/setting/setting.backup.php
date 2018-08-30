<div class="card card-small mb-4">
      <div class="card-header border-bottom">
        <h6 class="m-0">ตั้งค่าการสำรองข้อมูล</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-2">
          <div class="row">
            <div class="col">
              <div class="form-row">
              <div class="form-group col-md-12">
                  <label>ชื่อสำหรับจัดเก็บ</label>
                  <input type="text" class="form-control" id="pathfile" name="pathfile" placeholder="ชื่อสำหรับจัดเก็บ">
                </div>
                <div class="form-group col-md-12">
                  <label>ไดเรกทอรี่ต้นทาง</label>
                  <input type="text" class="form-control" id="pathfile" name="pathfile" placeholder="กำหนดไดเรกทอรี่ต้นทาง">
                </div>
                <div class="form-group col-md-12">
                  <label>ไดเรกทอรี่ปลายทาง</label>
                  <input type="text" class="form-control" id="pathfile" name="pathfile" placeholder="กำหนดไดเรกทอรี่ปลายทาง">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <div class="col-md-12">กำหนดวันเวลาการสำรองข้อมูล</div>


                 <div class="form-check form-check-inline  col-md-12 ">
                  <input class="form-check-input" type="checkbox" id="day" value="day" name="day">
                  <label class="form-check-label" for="day">รายวัน</label>
                </div>

                 <div class="form-check form-check-inline  col-md-12" >
                  <select class="form-control form-control-sm" id="day_select">
                    <option value="">เวลา/ชม</option>
                    <?php
                        for ($i=1; $i < 24; $i++) { 
                          if ($i <= 9) {
                            echo "<option value='".$i."'>0".$i.":00</option>";
                          }else{
                            echo "<option value='".$i."'>".$i.":00</option>";
                          }                                                    
                        }
                        echo "<option value='00'>00:00</option>";
                    ?>
                  </select>
                </div>

                 <div class="form-check form-check-inline col-md-12">
                  <input class="form-check-input " type="checkbox" id="week" value="week" name="week">
                  <label class="form-check-label" for="week">รายสัปดาห์</label>
                 </div>
                  
                <div class="form-check form-check-inline  col-md-12" >
                  <select class="form-control form-control-sm " id="week_select" display = "none">
                    <option value="">วัน...</option>
                    <option value="จันทร์">จันทร์</option>
                    <option value="อังคาร">อังคาร</option>
                    <option value="พุธ">พุธ</option>
                    <option value="พฤหัส">พฤหัส</option>
                    <option value="ศุกร์">ศุกร์</option>
                     <option value="เสาร์">เสาร์</option>
                      <option value="อาทิตย์">อาทิตย์</option>
                  </select>
                </div>
                 
                 <div class="form-check form-check-inline col-md-12">
                  <input class="form-check-input" type="checkbox" id="month" value="month" name="month">
                  <label class="form-check-label" for="month">รายเดือน</label>
                 </div>
                
                <div class="form-check form-check-inline  col-md-12" >
                  <select class="form-control form-control-sm" id="month_select">
                    <option value="">วันที่...</option>
                    <?php
                      for ($i=1; $i <= 30; $i++) { 
                        echo '<option value="'.$i.'">'.$i.'</option>';
                      }
                    ?>
                  </select>
                </div>

                </div>
              </div>
              <div class="card-header border-bottom">
               <h6 class="m-0">ฐานข้อมูล</h6>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="feEmailAddress">ผู้ใช้ฐาน</label>
                  <input type="text" class="form-control" id="nameBackup" placeholder="root" value="">
                </div>
                <div class="form-group col-md-12">
                  <label for="feEmailAddress">รหัสผ่าน</label>
                  <input type="password" class="form-control" id="nameBackup" placeholder="******" value="">
                </div>
                <div class="form-group col-md-12">
                  <label for="feEmailAddress">ชื่อฐาน</label>
                  <input type="text" class="form-control" id="nameBackup" placeholder="Mydatabase" value="">
                </div>
                <div class="form-group col-md-12">
                  <label for="feEmailAddress">ที่อยู่</label>
                  <input type="text" class="form-control" id="nameBackup" placeholder="localhost" value="">
                </div>
              </div>                                
            </div>
          </div>
        </li>
      </ul>      
      