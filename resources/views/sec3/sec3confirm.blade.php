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
<!-- ------------------------------------------  Link Script Jquery-  --------------------------------------------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<body>
    <!-- ------------------------------------------  include  --------------------------------------------->

    <div class="container-scroller">
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
                                <h3 class="newFont">ยืนยันตัวชี้วัด</h3>
                            </div>
                        </div>

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="newFont"> ส่วนที่ 3 ตัวชี้วัดผลการปฏิบัติงานตามภารกิจของหน่วยงาน </h3>
                                    <br>
                                    <div class="row">
                                        <!-- <div class="col-md-1"></div> -->
                                        <div class="col-md-12">
                                            <table class="table table-bordered newFont">
                                                <thead>
                                                    <tr class="d-flex">
                                                        <th class="col-sm-1" scope="col">
                                                            <h7 class="newFont">ลำดับ</h7>
                                                        </th>
                                                        <th class="col-sm-4" scope="col">
                                                            <h7 class="newFont">ตัวชี้วัด</h7>
                                                        </th>
                                                        <th class="col-sm-2" scope="col">
                                                            <h7 class="newFont">หน่วยนับ</h7>
                                                        </th>
                                                        <th class="col-sm-1" scope="col">
                                                            <h7 class="newFont">แผนตัวชี้วัด</h7>
                                                        </th>
                                                        <th class="col-sm-2" scope="col">
                                                            <h7 class="newFont">ผู้รับผิดชอบ</h7>
                                                        </th>
                                                        <th class="col-sm-2" scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr class="d-flex">
                                                        <td class="col-sm-1"> </td>
                                                        <td class="col-sm-4 break textleft"> </td>
                                                        <td class="col-sm-2 textleft"> เล่ม/คน </td>
                                                        <td class="col-sm-1"> 1 </td>
                                                        <td class="col-sm-2 textleft"> อาภรณ์ </td>
                                                        <td class="col-sm-2"><button class="btn btn-gradient-success newFont" data-toggle="modal" >ยืนยัน</button>

                                                    </tr>

                                                    <!-- <tr class="d-flex">
                                                        <td class="col-sm-1"> 2 </td>
                                                        <td class="col-sm-4"> จำนวนหนังสือต่ออาจารย์ * </td>
                                                        <td class="col-sm-2"> เล่ม/คน </td>
                                                        <td class="col-sm-2"> อาภรณ์ </td>
                                                        <td class="col-sm-3"><button class="btn btn-gradient-success newFont" data-toggle="modal" data-target="#editindicator"><i class="mdi mdi-grease-pencil launch-modal"></i></button>

                                                        </td>
                                                    </tr> -->

                                                </tbody>
                                            </table>
                                            <!-- <div class="col-md-1"></div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ------------------------------------------  แสดงตัวชี้วัด end-  --------------------------------------------->

                        <!-- ------------------------------------------  แก้ไขตัวชี้วัด ---------------------------------------------------->
                        <div class="modal fade" id="editindicator" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <br>
                                        <h2 class="modal-title newFont" id="exampleModalLabel">แก้ไขตัวชี้วัด</h2>
                                        <form class="forms-sample">
                                            <hr><br>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="newFont">หัวข้อ</label>
                                                    <input type="text" class="form-control" placeholder="หัวข้อตัวขี้วัด" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="newFont">แผนตัวชี้วัด</label>
                                                    <input type="text" class="form-control" placeholder="แผนตัวชี้วัด" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="newFont">หน่วยนับ</label>

                                                    <input type="text" class="form-control" placeholder="หน่วยนับ" required>

                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="newFont">ผู้รับผิดชอบ</label>
                                                    <select class="form-control">
                                                        <optgroup class="newFont">
                                                            <option>เลือกผู้รับผิดชอบ</option>
                                                            <option>ทีมดูแลเพจ</option>
                                                            <option>เกษมาพร</option>
                                                            <option>ปรีชา</option>
                                                            <option>อาภรณ์</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-9"></div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        <h7 class="newFont">ยกเลิก</h7>
                                                    </button>
                                                    <button type="button" class="btn btn-primary">
                                                        <h7 class="newFont">บันทึก</h7>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="addindicator" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <br>
                                        <h2 class="newFont">สร้างตัวชี้วัด</h2><br>
                                        <hr><br>
                                        <form class="forms-sample">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="newFont">หัวข้อ</label>
                                                    <input type="text" class="form-control" placeholder="หัวข้อตัวขี้วัด" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="newFont">แผน</label>
                                                    <input type="text" class="form-control" placeholder="แผนตัวชี้วัด" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="newFont">หน่วยนับ</label>

                                                    <input type="text" class="form-control" placeholder="หน่วยนับ" required>

                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="newFont">ผู้รับผิดชอบ</label>
                                                    <select class="form-control">
                                                        <optgroup class="newFont">
                                                            <option>เลือกผู้รับผิดชอบ</option>
                                                            <option>ทีมดูแลเพจ</option>
                                                            <option>เกษมาพร</option>
                                                            <option>ปรีชา</option>
                                                            <option>อาภรณ์</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-9"></div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        <h7 class="newFont">ยกเลิก</h7>
                                                    </button>
                                                    <button type="button" class="btn btn-primary">
                                                        <h7 class="newFont">บันทึก</h7>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="deleteindicator" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title newFont">ลบตัวชี้วัด</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="newFont">ต้องการลบตัวชี้วัดนี้หรือไม่</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary newFont" data-dismiss="modal">ยกเลิก</button>
                                        <button type="button" class="btn btn-primary newFont">ยืนยัน</button>
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
    <!-- Div nav & side -->
    </div>
</body>