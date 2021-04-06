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
        word-break: break-all;
        white-space: normal;
    }


    th {
        text-align: center;
    }
</style>
<!-- ------------------------------------------  Link Script Jquery-  --------------------------------------------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

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
                                <h3 class="newFont">ฝ่ายส่งเสริมการเรียนรู้และให้บริการการศึกษา</h3>
                            </div>
                        </div>

                        <!-- ค้นหาตัวชี้วัด -->
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="newFont"> ค้นหาผลการดำเนินงานย้อนหลัง ส่วนที่4 </h3>
                                    <br>
                                    <div class="row">
                                        <label class="newFont">ค้นหา</label>
                                            <div class="col-sm-3">
                                                <select class="form-control">
                                                    <optgroup class="newFont">
                                                        <option>ปี</option>
                                                        <option>2563</option>
                                                        <option>2564</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="form-control">
                                                    <optgroup class="newFont">
                                                        <option>เดือน</option>
                                                        <option>มกราคม</option>
                                                        <option>กุมภาพันธ์</option>
                                                        <option>มีนาคม</option>
                                                        <option>เมษายน</option>
                                                        <option>พฤษภาคม</option>
                                                        <option>มิถุนายน</option>
                                                        <option>กรกฎาคม</option>
                                                        <option>สิงหาคม</option>
                                                        <option>กันยายน</option>
                                                        <option>ตุลาคม </option>
                                                        <option>พฤศจิกายน</option>
                                                        <option>ธันวาคม</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <button class="btn btn-gradient-primary newFont" data-toggle="modal" data-target=""><i class="mdi mdi-account-search-outline"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ข้อมูลตัวชี้วัด -->
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">
                                        <h3 class="newFont"> ข้อมูลผลการดำเนินงานย้อนหลัง ส่วนที่4 </h3>
                                    </div>
                                    <div class="button-position">
                                        <button class="btn btn-gradient-warning newFont" data-toggle="modal" data-target="#downloadindicator"><i class="mdi mdi-cloud-download"></i>
                                        </button>
                                    </div>
                                    <br>
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
                                                            <h7 class="newFont">ตัวชี้วัดตามคำรับรอง</h7>
                                                        </th>
                                                        <th class="col-sm-3" scope="col">
                                                            <h7 class="newFont">เป้าหมายตามคำรับรอง</h7>
                                                        </th>
                                                        <th class="col-sm-2" scope="col">
                                                            <h7 class="newFont">ผู้รับผิดชอบ</h7>
                                                        </th>

                                                    </tr>
                                                </thead>
                                                @foreach ($ob as $data)
                                                <tbody>
                                                    <tr class="d-flex">
                                                        <td class="col-sm-1"> {{$data->indicator_stratetegic_id}} </td>
                                                        <td class="col-sm-4 break textleft"> {{$data->indicator_stratetegic_name}} </td>
                                                        <td class="col-sm-3 break textleft"> ร้อยละ 85 </td>
                                                        <td class="col-sm-2"> อาภรณ์ </td>
                                                        <td class="col-sm-2">
                                                            <button class="btn btn-gradient-info newFont" data-toggle="modal" data-target="#infoindicator"><i class="mdi mdi-chart-areaspline"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                @endforeach
                                            </table>
                                            <!-- <div class="col-md-1"></div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ------------------------------------------  แสดงตัวชี้วัด end-  --------------------------------------------->

                        <!-- ------------------------------------------  แสดงข้อมูลตัวชี้วัด ---------------------------------------------------->
                        <div class="modal fade" id="infoindicator" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <br>
                                        <h2 class="modal-title newFont" id="exampleModalLabel">กราฟแสดงข้อมูลย้อนหลัง</h2>
                                        <div class="container-scroller">

                                            <div class="container-fluid page-body-wrapper">

                                                <div class="main-panel">
                                                    <div class="content-wrapper ">


                                                        <!-- chart-month -->
                                                        <div class="row">
                                                            <div class="col">
                                                                <div id="chart-month">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @include('partials.footer')
                                                </div>

                                            </div>

                                        </div>
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

                        <!-- ดาวน์โหลดตัวชี้วัด -->
                        <div class="modal fade" id="downloadindicator" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title newFont">ดาวน์โหลดตัวชี้วัด</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="newFont">ต้องการดาวน์โหลดตัวชี้วัดนี้หรือไม่</p>
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
<!-- chart-month -->
<script>
    var optionsMonth = {
        series: [{
            name: 'Value',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 47, 58, 62]
        }, ],
        chart: {
            type: 'bar',
            Width: 100,
            height: 475

        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded',
                barHeight: '100%'
            },
        },
        dataLabels: {
            enabled: false

        },
        stroke: {
            show: true,
            width: 5,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        },
        fill: {
            opacity: 1
        },
    };
    var chartQuarter = new ApexCharts(document.querySelector("#chart-month"), optionsMonth);
    chartQuarter.render();
</script>