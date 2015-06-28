<script>
         $(document).ready(function () {

             $('#boxform2').load('./profiles');
             $('#mainmenu2 li a').click(function (e) {
                 //alert($(this).attr('href'));

                 e.preventDefault();
                 $(this).tab('show');

                 var page = $(this).attr('href');

                 $('#boxform2').load($(this).attr('href'));
                 return false;

             });
         });
</script>

<div class="container-fluid">
         <div role="tabpanel" style="padding:5px;">
                  <!-- Nav tabs -->
                  <ul id="mainmenu2" class="nav  nav-pills" role="tablist">
                           <li role="presentation" class="active"><a href="./profiles#top" aria-controls="home" role="tab" data-toggle="tab">Profiles</a></li>
                           <li role="presentation"><a href="./works#top" aria-controls="profile" role="tab" data-toggle="tab">ภาระงาน</a></li>               
                  </ul>
                  <!-- Tab panes -->
         </div>

         <div id="boxform2"></div>
</row>







