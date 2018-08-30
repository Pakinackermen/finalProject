<div class="col-lg-6">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
            <!-- <span class="text-uppercase page-subtitle">Overview</span> -->
            <h3 class="page-title">ระบบกู้คืนข้อมูล</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="card card-small mb-4">
        <div class="card-header border-bottom">
            <h6 class="m-0">กู้คืนข้อมูล</h6>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item p-4">
                <div class="row">
                    <div class="col">
                        <form action="brecovery/recovory/index.recovery.php" method="poet">
                            <div class="form-row ">
                                <div class="form-group col-md-12">
                                    <label>เลือกไดเรกทอรี่ที่ต้องการ</label>
                                    <select id="pathBackup" class="form-control">
                                        <option selected>กู้คืนไดเรกทอรี่...</option>
                                        <option>Path 1</option>
                                        <option>Path 2</option>
                                    </select>
                                    </br>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="feEmailAddress">เลือกข้อมูลสำรอง</label>
                                            <input type="file" class="form-control-file" id="nameBackup"></br>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="feDescription">เหตุผล</label>
                                                    <textarea class="form-control" name="feDescription" rows="5">เหตุผลการกู้คืน</textarea>
                                                </div>
                                            </div>
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