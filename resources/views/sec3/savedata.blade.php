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

  .textleft {
    text-align: left;
  }

  td.break {
    word-wrap: break-word;
    /* word-break: break-all; */
    white-space: normal;
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
                <h3 class="newFont">ผลการปฏิบัติงานตามภารกิจของหน่วยงาน</h3>
              </div>
            </div>

            <div class="form-group col-md-4">
              <form action="{{route('resultshowmount')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <select id="client_id" type="dropdown-toggle" class="form-control" name="mount">
                  <optgroup>
                    <option value="1" {{ $mount == 1 ? 'selected' : '' }}>มกราคม</option>
                    <option value="2" {{ $mount == 2 ? 'selected' : '' }}>กุมภาพันธ์</option>
                    <option value="3" {{ $mount == 3 ? 'selected' : '' }}>มีนาคม</option>
                    <option value="4" {{ $mount == 4 ? 'selected' : '' }}>เมษายน</option>
                    <option value="5" {{ $mount == 5 ? 'selected' : '' }}>พฤษภาคม</option>
                    <option value="6" {{ $mount == 6 ? 'selected' : '' }}>มิถุนายน</option>
                    <option value="7" {{ $mount == 7 ? 'selected' : '' }}>กรกฎาคม</option>
                    <option value="8" {{ $mount == 8 ? 'selected' : '' }}>สิงหาคม</option>
                    <option value="9" {{ $mount == 9 ? 'selected' : '' }}>กันยายน</option>
                    <option value="10" {{ $mount == 10 ? 'selected' : '' }}>ตุลาคม</option>
                    <option value="11" {{ $mount == 11 ? 'selected' : '' }}>พฤศจิกายน</option>
                    <option value="12" {{ $mount == 12 ? 'selected' : '' }}>ธันวาคม</option>
                  </optgroup>
                </select>
              </form>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="col-md-12">
                    <table class="table table-bordered newFont">
                      <thead>
                        <tr class="d-flex">
                          <th class="col-sm-4" scope="col">
                            <h7 class="newFont">ตัวชี้วัด</h7>
                          </th>
                          <th class="col-sm-1" scope="col">
                            <h7 class="newFont">หน่วยนับ</h7>
                          </th>
                          <th class="col-sm-1" scope="col">
                            <h7 class="newFont">ผล</h7>
                          </th>
                          <th class="col-sm-4" scope="col">
                            <h7 class="newFont">ผลการดำเนินงาน</h7>
                          </th>
                          <th class="col-sm-2" scope="col">แก้ไข</th>
                        </tr>
                      </thead>
                      @foreach ($ob as $data)

                      <tbody>
                        <tr class="d-flex">
                          <td class="col-sm-4 break textleft">
                            {{$data->indicator_result_name}}
                          </td>
                          <th class="col-sm-1 textleft"> เล่ม/คน </th>
                          <td class="col-sm-1"> </td>
                          <td class="col-sm-4"> </td>
                          <td class="col-sm-2"><button class="btn btn-gradient-success newFont" data-toggle="modal" data-target="#editindicator"><i class="mdi mdi-grease-pencil launch-modal"></i></button>
                          </td>
                        </tr>
                      </tbody>

                      @endforeach
                      <!-- <tr class="d-flex">
                        <td class="col-sm-3"> จำนวนหนังสือต่ออาจารย์ * </td>
                        <th class="col-sm-1"> เล่ม/คน </th>
                        <td class="col-sm-1"> </td>
                        <td class="col-sm-5"> </td>
                        <td class="col-sm-2"><button class="btn btn-gradient-success newFont" data-toggle="modal" data-target="#editindicator"><i class="mdi mdi-grease-pencil launch-modal"></i></button>
                        </td>
                      </tr>
                    </tbody> -->
                    </table>
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
              <!--box edit -->
              <div class="modal fade" id="editindicator" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <br>
                      <h2 class="modal-title newFont" id="exampleModalLabel">แก้ไขผลการปฏิบัติงาน</h2>
                      <form class="forms-sample">
                        <hr><br>
                        <div class="row">
                          <div class="form-group col-md-4">
                            <label class="newFont">ตัวชี้วัด</label>
                            <input type="text" class="form-control" placeholder="ตัวชี้วัด" value="" required>
                          </div>

                          <div class="form-group col-md-2">
                            <label class="newFont">หน่วยนับ</label>
                            <input type="text" class="form-control" placeholder="เล่ม/คน">
                          </div>
                          <div class="form-group col-md-2">
                            <label class="newFont">ผล</label>
                            <input type="text" class="form-control" placeholder="ผล" required>
                          </div>
                          <div class="form-group col-md-4">
                            <label class="newFont">ผลการดำเนินงาน</label>
                            <input type="text" class="form-control" placeholder="ผลการดำเนินงาน" required>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <h7 class="newFont">ยกเลิก</ย>
                      </button>
                      <button type="button" class="btn btn-primary">
                        <h7 class="newFont">บันทึก</h7>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- content-wrapper ends -->
              <!-- partial:partials/_footer.html -->
              @include('partials.footer')
              <!-- partial -->

            </div>
          </div>
        </div>
      </div>

</body>