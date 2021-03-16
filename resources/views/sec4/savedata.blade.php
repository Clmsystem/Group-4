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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
              <div class="page-header">
                <h3 class="newFont">ผลการดำเนินงานตามตัวชี้วัดยุทธศาสตร์</h3>
              </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card"> 
              <div class="card">
                <div class="card-body">
                  <div class="col-md-12">
                    <table class="table table-bordered newFont">
                      <thead>
                        <tr class="d-flex">
                          <th class="col-sm-3" scope="col">
                            <h7 class="newFont">ตัวชี้วัดตามคำรับรอง</h7>
                          </th>
                          <th class="col-sm-2" scope="col">
                            <h7 class="newFont">เป้าหมาย<br>ตามคำรับรอง</h7>
                          </th>
                          <th class="col-sm-1" scope="col">
                            <h7 class="newFont">ผล</h7>
                          </th>
                          <th class="col-sm-1" scope="col">
                            <h7 class="newFont">ร้อยละ<br>ผลสำเร็จ</h7>
                          </th>
                          <th class="col-sm-3" scope="col">
                            <h7 class="newFont">งานที่สำเร็จแล้ว/<br>งานที่จะดำเนินการในอนาคต</h7>
                          </th>
                          <th class="col-sm-2" scope="col">แก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr class="d-flex">
                        <td class="col-sm-3"> WU2-2-3 <br>ร้อยละความพึงพอใจของผู้รับบริการ <br>(นักศึกษา บุคลากรและประชาชน) </td>
                        <th class="col-sm-2"> ร้อยละ 85 </th>
                        <td class="col-sm-1">  </td>
                        <td class="col-sm-1">  </td>
                        <td class="col-sm-3">  </td>
                        <td class="col-sm-2"><button class="btn btn-gradient-success newFont" data-toggle="modal" data-target="#editindicator"><i class="mdi mdi-grease-pencil launch-modal"></i></button>
                        </td>
                      </tr>
                      <tr class="d-flex">
                        <td class="col-sm-3"> WU6-2-4 <br>จำนวนประชาชนที่เข้าถึงหลักสูตร/<br>แหล่งเรียนรู้ที่จัดการศึกษาในรูปแบบ<br> life long learning</td>
                        <th class="col-sm-2"> 100,000 คน <br>(ออนไลน์/ฐานข้อมูล, <br>บุคคลภายนอกดูงาน <br>,MOOC) </th>
                        <td class="col-sm-1"> </td>
                        <td class="col-sm-1"> </td>
                        <td class="col-sm-3"> </td>
                        <td class="col-sm-2"><button class="btn btn-gradient-success newFont" data-toggle="modal" data-target="#editindicator"><i class="mdi mdi-grease-pencil launch-modal"></i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
            <!--box edit -->
            <div class="modal fade" id="editindicator" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <br>
                    <h2 class="modal-title newFont" id="exampleModalLabel">แก้ไขผลการดำเนินงานตามตัวชี้วัดยุทธศาสตร์</h2>
                    <form class="forms-sample">
                      <hr><br>
                      <div class="row">
                        <div class="form-group col-md-4">
                          <label class="newFont">ตัวชี้วัดตามคำรับรอง</label>
                          <input type="text" class="form-control" placeholder="ตัวชี้วัดตามคำรับรอง" value="" required>
                        </div>

                        <div class="form-group col-md-2">
                          <label class="newFont">ผล</label>
                          <input type="text" class="form-control" placeholder="ผล">
                          </div>
                        <div class="form-group col-md-2">
                          <label class="newFont">ร้อยละผลสำเร็จ</label>
                          <input type="text" class="form-control" placeholder="ร้อยละผลสำเร็จ" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label class="newFont">งานที่สำเร็จแล้ว/งานที่จะดำเนินการในอนาคต</label>
                          <input type="text" class="form-control" placeholder="งานที่สำเร็จแล้ว/งานที่จะดำเนินการในอนาคต" required>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                      <h7 class="newFont">ยกเลิก</h7>
                    </button>
                    <button type="button" class="btn btn-primary">
                      <h7 class="newFont">บันทึก</h7>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @include('partials.footer')
        </div>
      </div>
    </div>
  </div>

</body>