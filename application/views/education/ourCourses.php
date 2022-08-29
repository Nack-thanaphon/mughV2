<div class="col-12 text-center my-auto" id="text-slide">
    <div class="d-flex justify-content-between align-items-center breaking-news">
        <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center   py-2 text-primary px-1 news"><span class="d-flex align-items-center">
                <h4 class="p-0 m-0 border-left">&nbsp;Announcement</h4>
            </span></div>
        <marquee class="news-scroll " behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
            <a href="https://hurs.mahidol.ac.th" class="nav-link" target="blank">
                <h3 class="m-0 p-0 text-dark">Welcome to MUGH | Mahidol University Global Health</h3>
            </a>
        </marquee>

    </div>
</div>



<div class="row m-0 p-0">
    <div class="col-12 py-5 bg-primary text-center">
        <h1 class="p-0 m-0 text-white text-center ">Courses
        </h1>
    </div>
    <div class="col-12 p-sm-5 p-2">
        <div class="row m-0 p-0">
            <div class="col-12 col-sm-12 my-1">
                <a href="<?= site_url('education/ourProgram') ?>" class="btn btn-secondary"><i class="fas fa-bookmark"></i> Global Health Program</a>
            </div>
            <div class="col-12 col-sm-3">
                <div class="position-sticky  mb-5">
                    <div class="text-black rounded">
                        <div class="bg-white  py-3 text-white ">
                            <div class="nav flex-column nav-pills me-3 text-dark" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link text-uppercase active" type="button" id="faculty1-tab" data-bs-toggle="pill" data-bs-target="#faculty1" type="button" role="tab" aria-controls="faculty1" aria-selected="true">
                                    ปริญญาตรี
                                </a>
                                <a class="nav-link text-uppercase" type="button" id="faculty2-tab" data-bs-toggle="pill" data-bs-target="#faculty2" role="tab" aria-controls="faculty2" aria-selected="false">
                                    ปริญญาโท
                                </a>
                                <a class="nav-link text-uppercase" type="button" id="faculty3-tab" data-bs-toggle="pill" data-bs-target="#faculty3" role="tab" aria-controls="faculty3" aria-selected="false">
                                    ปริญญาเอก
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-9 tab-content" id="v-pills-tabContent">
                <div class=" tab-pane fade show active " id="faculty1" role="tabpanel" aria-labelledby="faculty1-tab">
                    <div class="col-12 col-md-12 col-sm-12  border bg-white p-2 shadow-sm rounded-lg text-sm-center">
                        <div class="row my-4 m-0 p-0">
                            <div class="col-12 m-0 p-0">
                                <table id="g_table" class="p-0 m-0 table table-hover w-100" width="100%">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="edu_detail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">รายละเอียดหลักสูตร</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="text-primary fw-bold">รหัสและชื่อรายวิชา </p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, est?</p>
                            <p class="text-primary fw-bold">ส่วนงานที่รับผิดชอบ </p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, est?</p>
                            <p class="text-primary fw-bold">หลักสูตร </p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, est?</p>
                            <p class="text-primary fw-bold">ประเภทของรายวิชา </p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, est?</p>
                            <p class="text-primary fw-bold">วันที่จัดทำหรือปรับปรุงรายละเอียดของรายวิชาครั้งล่าสุด </p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, est?</p>
                            <p class="text-primary fw-bold">จุดมุ่งหมายของรายวิชา </p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, est?</p>
                            <p class="text-primary fw-bold">วัตถุประสงค์ของรายวิชา </p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, est?</p>
                            <p class="text-primary fw-bold">คำอธิบายรายวิชา </p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, est?</p>
                            <p class=" fw-bold py-3">Website : <a href="">ไปที่เว็บไซต์หลัก</a> </p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                            <button type="button" class="btn btn-primary">ดาวน์โหลด</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "<?= base_url('issets/jsondata/officerprofile.json') ?>",
            data: {},
        }).done(function(data) {
            let tableData = []
            let n = 1
            for (var i = 0; i < data.length; i++) {
                tableData.push([
                    `${n++}`,
                    `<p class="fw-bold text-primary text-start">${data[i].name}</p>`,
                    `<p class="fw-bold text-start">${data[i].email}</p>`,
                    `<p class="fw-bold text-start">${data[i].position}</p>`,
                    `
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary">Download</button>
                    <button type="button" class="btn btn-primary" onclick=openModal() value="" >More..</button>
                    </div>

              `,

                ]);
            };

            initDataTables(tableData);
        }).fail(function() {
            $('#g_table').html('ไม่พบข้อมูล')
        })

        function initDataTables(tableData) { // สร้าง datatable
            $('#g_table').DataTable({
                data: tableData,
                order: [
                    ['0', 'desc']
                ],
                columns: [{
                        title: "ลำดับ",
                        className: "align-middle",
                        width: "5%"
                    },
                    {
                        title: "รหัสและชื่อรายวิชา",
                        className: "align-middle",
                    },
                    {
                        title: "หลักสูตร",
                        className: "align-middle",
                    },
                    {
                        title: "ประเภทของรายวิชา",
                        className: "align-middle",

                    },
                    {
                        title: "อ่านเพิ่มเติม",
                        className: "align-middle",

                    },
                ],


                initComplete: function() {},
                fnDrawCallback: function() {
                    $('.toggle-event').bootstrapToggle();
                },
                responsive: {
                    details: {
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        })
                    }
                },
                language: {
                    "lengthMenu": "แสดงข้อมูล _MENU_ แถว",
                    "zeroRecords": "ไม่พบข้อมูลที่ต้องการ",
                    "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูลที่ต้องการ",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": 'ค้นหา',
                    "paginate": {
                        "previous": "ก่อนหน้านี้",
                        "next": "หน้าต่อไป"
                    }
                }
            })
        }
    })

    function openModal() {
        $("#edu_detail").modal('show')
    }
</script>