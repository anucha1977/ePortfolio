<script>
    $(document).ready(function() {              

        $('#boxform').load('../dashboard/home');        
        $('#mainmenu li a').click(function(e) {  
                  e.preventDefault();
                $(this).tab('show');

                var page = $(this).attr('href');                            
                $('#boxform').load($(this).attr('href'));  
                return false;        
        });   
    });  
</script>

<div role="tabpanel">
  <!-- Nav tabs -->
  <ul id="mainmenu" class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="../dashboard/home#" aria-controls="home" role="tab" data-toggle="tab">Dashboard</a></li>
    <li role="presentation"><a href="./home#" aria-controls="profile" role="tab" data-toggle="tab">Portfolio</a></li>
    <li role="presentation"><a href="./skill#" aria-controls="messages" role="tab" data-toggle="tab">Portfolio</a></li>
    <li role="presentation"><a href="./profile#" aria-controls="settings" role="tab" data-toggle="tab">Administrator</a></li>
  </ul>
  <!-- Tab panes -->
</div>
<div id="boxform">dfsdf</div>
</div>
