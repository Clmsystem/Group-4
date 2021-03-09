@include('partials.header')
<style>
  @import url('https://fonts.googleapis.com/css2?family=Mitr&display=swap');

  .newFont {
    font-family: 'Mitr', sans-serif;
  }

  .button-position {
    float: right;
    margin: -8px;
  }

  .btns {
    padding: 0.9rem 2em;
    font-size: 0.875rem;
  }

  td {
    text-align: center;
  }

  th {
    text-align: center;
  }
</style>

<body>
  <div class="container-scroller newFont">
    <!-- partial:partials/_navbar.html -->
    @include('partials.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('partials.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="container-fluid content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="newFont">ส่วนที่ 3 ตัวชี้วัดผลการปฏิบัติงานตามภารกิจของหน่วยงาน</h3>
                  <p class="card-description"></p>
                  <form class="forms-sample">
                    <div class="form-group row">
                      <div class="col-md-2">
                        <label for="exampleInputUsername2" class="col-form-label"><b>ตัวชี้วัด</b></label>
                        <div>จำนวนหนังสือต่อนักศึกษา *</div>
                      </div>
                      <!-- <div class="col-md-2">
                        <label for="exampleInputUsername2" class="col-form-label"><b>หน่วยนับ</b></label>
                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div> -->

                      <div class="col-md-2">
                        <label for="exampleInputUsername2" class="col-form-label"><b>แผน</b></label>
                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                      <div class="col-md-2">
                        <label for="exampleInputUsername2" class="col-form-label"><b>ผล</b></label>
                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                      <div class="col-md-6">
                        <label for="exampleInputUsername2" class="col-form-label"><b>ผลการดำเนินงาน</b></label>
                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-2">

                        <div>จำนวนหนังสือต่ออาจารย์ *</div>
                      </div>
                      <div class="col-md-2">

                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                      <!-- <div class="col-md-2">

                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div> -->
                      <div class="col-md-2">

                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>

                      <div class="col-md-6">

                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2 newFont">บันทึก</button>
                    <button class="btn btn-light newFont">ยกเลิก</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('partials.footer')
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="assets/vendors/chart.js/Chart.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="assets/js/off-canvas.js"></script>
      <script src="assets/js/hoverable-collapse.js"></script>
      <script src="assets/js/misc.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="assets/js/dashboard.js"></script>
      <script src="assets/js/todolist.js"></script>
      <!-- End custom js for this page -->
</body>