
<div>
         <div class="col-md-2">
                  <script>
                           $(document).ready(function () {

                               $('#boxform3').load('profile');
                               $('#boxform3').attr('alt', 'profile');

                               $('#mainmenu3 li a').click(function (e) {
                                   //alert($(this).attr('href'));

                                   e.preventDefault();
                                   $(this).tab('show');

                                   var page = $(this).attr('href');

                                   $('#boxform3').attr('alt', $(this).attr('href'));
                                   //alert($('#boxform3').attr('alt'));

                                   $('#boxform3').load($('#boxform3').attr('alt'));
                                   

                                   return false;

                               });


                           });


                  </script>
                  <h1 class="page-header">Profiles</h1>
                  <!-- Nav tabs -->
                  <ul id="mainmenu3" class="nav nav-pills nav-stacked " >

                           <li role="presentation"  class="active"><a href="./profile#" aria-controls="profile" role="tab" data-toggle="tab">บัญชีผู้ใช้</a></li>
                           <li role="presentation"><a href="./personal#" aria-controls="settings" role="tab" data-toggle="tab">ข้อมูลส่วนบุคคล</a></li>
                           <li role="presentation" ><a href="./education#" aria-controls="profile" role="tab" data-toggle="tab">ประวัติการศึกษา</a></li>
                           <li role="presentation"><a href="./skill#" aria-controls="settings" role="tab" data-toggle="tab">ประวัติการทำงาน</a></li>
                           <li role="presentation"><a href="./skill#" aria-controls="settings" role="tab" data-toggle="tab">ข้อมูลความสำเร็จ</a></li>
                           <li role="presentation"><a href="./skill#" aria-controls="settings" role="tab" data-toggle="tab">เป้าหมาย</a></li>
                           <li role="presentation"><a href="./skill#" aria-controls="settings" role="tab" data-toggle="tab">ความสามารถ</a></li>
                           <li role="presentation"><a href="./skill#" aria-controls="settings" role="tab" data-toggle="tab">แผน</a></li>
                  </ul>
         </div>
         <div class="col-md-9">
                  <div id="boxform3" title="">boxform3</div>
         </div>
</div>








