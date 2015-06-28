<h1 class="page-header">Referances</h1>
<?php  echo $this->router->fetch_class()."-".$this->router->fetch_method(); ?>


<script type="text/javascript">
$(document).ready(function(){
    removeSection = function(e) {
		$(e).parents(".section").remove();
		$('[data-spy="scroll"]').each(function(){
	    	var $spy = $(this).scrollspy('refresh');
		});
    }
    $(".scroll-area").scrollspy({target: "#myNavbar"});
});
</script>

<style type="text/css">
.scroll-area {
	
	position: relative;
	overflow: auto;
}
.group {
    background: yellow;
    width: 200px;
    height: 500px;
}
.group .subgroup {
    background: orange;
    width: 150px;
    height: 200px;
}
.fixed {
    position: fixed;
}

/* sidebar */
.bs-docs-sidebar {
    padding-left: 20px;
    margin-top: 20px;
    margin-bottom: 20px;
}

/* all links */
.bs-docs-sidebar .nav>li>a {
    color: #999;
    border-left: 2px solid transparent;
    padding: 4px 20px;
    font-size: 13px;
    font-weight: 400;
}

/* nested links */
.bs-docs-sidebar .nav .nav>li>a {
    padding-top: 1px;
    padding-bottom: 1px;
    padding-left: 30px;
    font-size: 12px;
}

/* active & hover links */
.bs-docs-sidebar .nav>.active>a, 
.bs-docs-sidebar .nav>li>a:hover, 
.bs-docs-sidebar .nav>li>a:focus {
    color: #563d7c;                 
    text-decoration: none;          
    background-color: transparent;  
    border-left-color: #563d7c; 
}
/* all active links */
.bs-docs-sidebar .nav>.active>a, 
.bs-docs-sidebar .nav>.active:hover>a,
.bs-docs-sidebar .nav>.active:focus>a {
    font-weight: 700;
}
/* nested active links */
.bs-docs-sidebar .nav .nav>.active>a, 
.bs-docs-sidebar .nav .nav>.active:hover>a,
.bs-docs-sidebar .nav .nav>.active:focus>a {
    font-weight: 500;
}

/* hide inactive nested list */
.bs-docs-sidebar .nav ul.nav {
    display: none;           
}
/* show active nested list */
.bs-docs-sidebar .nav>.active>ul.nav {
    display: block;           
}
</style>


<div class="container">
    <h2>Bootstrap Scrollspy</h2>
    <p>Remove any section within the scroll area below using the "Remove this section" link to see how scorllspy automatically refreshed in order to highlight the menu items based on the available target element.</p>
    

        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="col-md-2" role="complementary">      
             <nav id="myNavbar" class="navbar   bs-docs-sidebar" role="navigation"> 
             	<div class=" " id="navbarCollapse">

            <ul class="nav bs-docs-sidenav">
                <li class="active"><a href="#section-1">Section 1</a></li>
                <li><a href="#section-2">Section 2</a></li>
                <li><a href="#section-3">Section 3</a>
                	<ul class="nav nav-stacked">
	                    <li><a href="#GroupASub1">Sub-Group 1</a></li>
	                    <li><a href="#GroupASub2">Sub-Group 2</a></li>
	                </ul>
                </li>
	<li><a href="#section-4">Section 4</a></li>
                <li><a href="#section-5">Section 5</a></li>
            </ul>
        </div>
    </nav>
  </div>
    <div class="scroll-area" data-spy="scroll" data-offset="0">
        <div class="section">
            <h3 id="section-1">Section 1 <small><a href="#" onclick="removeSection(this);">× Remove this section</a></small></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum vestibulum. Vivamus fermentum in arcu in aliquam. Quisque aliquam porta odio in fringilla. Vivamus nisl leo, blandit at bibendum eu, tristique eget risus. Integer aliquet quam ut elit suscipit, id interdum neque porttitor. Integer faucibus ligula.</p>
            <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit at lacus blandit, commodo iaculis justo viverra. Etiam vitae est arcu. Mauris vel congue dolor. Aliquam eget mi mi. Fusce quam tortor, commodo ac dui quis, bibendum viverra erat. Maecenas mattis lectus enim, quis tincidunt dui molestie euismod. Curabitur et diam tristique, accumsan nunc eu, hendrerit tellus.</p>
        </div>
        <hr>
        <div class="section">
            <h3 id="section-2">Section 2 <small><a href="#" onclick="removeSection(this);">× Remove this section</a></small></h3>
            <p>Nullam hendrerit justo non leo aliquet imperdiet. Etiam in sagittis lectus. Suspendisse ultrices placerat accumsan. Mauris quis dapibus orci. In dapibus velit blandit pharetra tincidunt. Quisque non sapien nec lacus condimentum facilisis ut iaculis enim. Sed viverra interdum bibendum. Donec ac sollicitudin dolor. Sed fringilla vitae lacus at rutrum. Phasellus congue vestibulum ligula sed consequat.</p>
            <p>Vestibulum consectetur scelerisque lacus, ac fermentum lorem convallis sed. Nam odio tortor, dictum quis malesuada at, pellentesque vitae orci. Vivamus elementum, felis eu auctor lobortis, diam velit egestas lacus, quis fermentum metus ante quis urna. Sed at facilisis libero. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum bibendum blandit dolor. Nunc orci dolor, molestie nec nibh in, hendrerit tincidunt ante. Vivamus sem augue, hendrerit non sapien in, mollis ornare augue.</p>
        </div>
        <hr>
        <div class="section">
            <h3 id="section-3">Section 3 <small><a href="#" onclick="removeSection(this);">× Remove this section</a></small></h3>
            <p>Integer pulvinar leo id risus pellentesque vestibulum. Sed diam libero, sodales eget sapien vel, porttitor bibendum enim. Donec sed nibh vitae lorem porttitor blandit in nec ante. Pellentesque vitae metus ipsum. Phasellus sed nunc ac sem malesuada condimentum. Etiam in aliquam lectus. Nam vel sapien diam. Donec pharetra id arcu eget blandit. Proin imperdiet mattis augue in porttitor. Quisque tempus enim id lobortis feugiat. Suspendisse tincidunt risus quis dolor fringilla blandit. Ut sed sapien at purus lacinia porttitor. Nullam iaculis, felis a pretium ornare, dolor nisl semper tortor, vel sagittis lacus est consequat eros. Sed id pretium nisl. Curabitur dolor nisl, laoreet vitae aliquam id, tincidunt sit amet mauris.</p>
            <p>Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget ante rutrum adipiscing. Cras interdum ipsum mattis, tempus mauris vel, semper ipsum. Duis sed dolor ut enim lobortis pellentesque ultricies ac ligula. Pellentesque convallis elit nisi, id vulputate ipsum ullamcorper ut. Cras ac pulvinar purus, ac viverra est. Suspendisse potenti. Integer pellentesque neque et elementum tempus. Curabitur bibendum in ligula ut rhoncus.</p>
            <p>Quisque pharetra velit id velit iaculis pretium. Nullam a justo sed ligula porta semper eu quis enim. Pellentesque pellentesque, metus at facilisis hendrerit, lectus velit facilisis leo, quis volutpat turpis arcu quis enim. Nulla viverra lorem elementum interdum ultricies. Suspendisse accumsan quam nec ante mollis tempus. Morbi vel accumsan diam, eget convallis tellus. Suspendisse potenti.</p>
        </div>
        <hr>
        <h3>Section 4</h3>
        <p>Nam eget purus nec est consectetur vehicula. Nullam ultrices nisl risus, in viverra libero egestas sit amet. Etiam porttitor dolor non eros pulvinar malesuada. Vestibulum sit amet est mollis nulla tempus aliquet.</p>
        <div class="section">
            <h4 id="section-4dot1">Section 4.1 <small><a href="#" onclick="removeSection(this);">× Remove this section</a></small></h4>
            <p>In mauris nunc, convallis eget pretium eu, bibendum non leo. Proin suscipit purus adipiscing dolor gravida, in fermentum sapien blandit. Praesent pellentesque ligula dui, in gravida turpis vehicula ac. Pellentesque hendrerit nunc ut luctus hendrerit. Aliquam nec tincidunt urna. Ut interdum nec odio non interdum. Curabitur ligula justo, dapibus non ligula tristique, dapibus tristique nulla. Aliquam pulvinar dapibus eros, rutrum pretium urna iaculis ut. Nam est est, tempus id egestas et, viverra in dui. Aliquam gravida orci tortor, sed congue justo ornare vel. Cras in quam consectetur eros varius scelerisque. Ut vel fermentum purus. Nullam interdum blandit turpis, id pellentesque massa feugiat at. Ut sed lectus lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla rutrum, ante quis convallis ultricies, magna quam rhoncus erat, in lacinia libero magna a ipsum.</p>
            <p>Nam eget purus nec est consectetur vehicula. Nullam ultrices nisl risus, in viverra libero egestas sit amet. Etiam porttitor dolor non eros pulvinar malesuada. Vestibulum sit amet est mollis nulla tempus aliquet. Praesent luctus hendrerit arcu non laoreet. Morbi consequat placerat magna, ac ornare odio sagittis sed. Donec vitae ullamcorper purus. Vivamus non metus ac justo porta volutpat.</p>
        </div>
        <div class="section">
            <h4 id="section-4dot2">Section 4.2 <small><a href="#" onclick="removeSection(this);">× Remove this section</a></small></h4>
            <p>Pellentesque viverra, velit eu blandit viverra, justo nulla vestibulum nisl, at egestas ligula augue non ipsum. Aliquam non posuere metus, sed luctus erat. Vivamus malesuada libero quis sem elementum condimentum. Vestibulum interdum, turpis nec venenatis fringilla, odio elit hendrerit dui, a commodo metus tortor a eros. Suspendisse egestas neque vitae laoreet pellentesque. Donec accumsan, elit quis rhoncus fringilla, quam leo feugiat velit, nec hendrerit purus diam aliquet neque. Pellentesque imperdiet sed erat eu varius.</p>
            <p>Morbi sed fermentum ipsum. Morbi a orci vulputate tortor ornare blandit a quis orci. Donec aliquam sodales gravida. In ut ullamcorper nisi, ac pretium velit. Vestibulum vitae lectus volutpat, consequat lorem sit amet, pulvinar tellus. In tincidunt vel leo eget pulvinar. Curabitur a eros non lacus malesuada aliquam. Praesent et tempus odio. Integer a quam nunc. In hac habitasse platea dictumst. Aliquam porta nibh nulla, et mattis turpis placerat eget. Pellentesque dui diam, pellentesque vel gravida id, accumsan eu magna. Sed a semper arcu, ut dignissim leo.</p>
        </div>
        <div class="section">
            <h4 id="section-4dot3">Section 4.3 <small><a href="#" onclick="removeSection(this);">× Remove this section</a></small></h4>
            <p>Fusce enim arcu, interdum vel metus dignissim, venenatis feugiat purus. Nulla posuere orci ut leo sodales, sed cursus dolor ornare. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam sit amet quam orci. Nulla sollicitudin lectus eget posuere venenatis. Sed vestibulum elementum sagittis. Quisque tristique tortor quis feugiat sollicitudin. Ut pellentesque luctus vulputate. Ut at odio ac erat blandit vehicula ut eget urna. In hac habitasse platea dictumst. Nullam ut iaculis nibh, eget eleifend elit.</p>
            <p>Sed vitae lobortis diam, id molestie magna. Aliquam consequat ipsum quis est dictum ultrices. Aenean nibh velit, fringilla in diam id, blandit hendrerit lacus. Donec vehicula rutrum tellus eget fermentum. Pellentesque ac erat et arcu ornare tincidunt. Aliquam erat volutpat. Vivamus lobortis urna quis gravida semper. In condimentum, est a faucibus luctus, mi dolor cursus mi, id vehicula arcu risus a nibh. Pellentesque blandit sapien lacus, vel vehicula nunc feugiat sit amet.</p>
        </div>
        <hr>
        <div class="section">
            <h3 id="section-5">Section 5 <small><a href="#" onclick="removeSection(this);">× Remove this section</a></small></h3>
            <p>Nam eget purus nec est consectetur vehicula. Nullam ultrices nisl risus, in viverra libero egestas sit amet. Etiam porttitor dolor non eros pulvinar malesuada. Vestibulum sit amet est mollis nulla tempus aliquet. Praesent luctus hendrerit arcu non laoreet. Morbi consequat placerat magna, ac ornare odio sagittis sed. Donec vitae ullamcorper purus. Vivamus non metus ac justo porta volutpat.</p>
            <p>Vivamus mattis accumsan erat, vel convallis risus pretium nec. Integer nunc nulla, viverra ut sem non, scelerisque vehicula arcu. Fusce bibendum convallis augue sit amet lobortis. Cras porta urna turpis, sodales lobortis purus adipiscing id. Maecenas ullamcorper, turpis suscipit pellentesque fringilla, massa lacus pulvinar mi, nec dignissim velit arcu eget purus. Nam at dapibus tellus, eget euismod nisl. Ut eget venenatis sapien. Vivamus vulputate varius mauris, vel varius nisl facilisis ac. Nulla aliquet justo a nibh ornare, eu congue neque rutrum.</p>
            <p>Suspendisse a orci facilisis, dignissim tortor vitae, ultrices mi. Vestibulum a iaculis lacus. Phasellus vitae convallis ligula, nec volutpat tellus. Vivamus scelerisque mollis nisl, nec vehicula elit egestas a. Sed luctus metus id mi gravida, faucibus convallis neque pretium. Maecenas quis sapien ut leo fringilla tempor vitae sit amet leo. Donec imperdiet tempus placerat. Pellentesque pulvinar ultrices nunc sed ultrices. Morbi vel mi pretium, fermentum lacus et, viverra tellus. Phasellus sodales libero nec dui convallis, sit amet fermentum sapien auctor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eu elementum nibh, quis varius libero.</p>
            <p>Morbi sed fermentum ipsum. Morbi a orci vulputate tortor ornare blandit a quis orci. Donec aliquam sodales gravida. In ut ullamcorper nisi, ac pretium velit. Vestibulum vitae lectus volutpat, consequat lorem sit amet, pulvinar tellus. In tincidunt vel leo eget pulvinar. Curabitur a eros non lacus malesuada aliquam. Praesent et tempus odio. Integer a quam nunc. In hac habitasse platea dictumst. Aliquam porta nibh nulla, et mattis turpis placerat eget. Pellentesque dui diam, pellentesque vel gravida id, accumsan eu magna. Sed a semper arcu, ut dignissim leo.</p>
            <p>Sed vitae lobortis diam, id molestie magna. Aliquam consequat ipsum quis est dictum ultrices. Aenean nibh velit, fringilla in diam id, blandit hendrerit lacus. Donec vehicula rutrum tellus eget fermentum. Pellentesque ac erat et arcu ornare tincidunt. Aliquam erat volutpat. Vivamus lobortis urna quis gravida semper. In condimentum, est a faucibus luctus, mi dolor cursus mi, id vehicula arcu risus a nibh. Pellentesque blandit sapien lacus, vel vehicula nunc feugiat sit amet.</p>
        </div>
    </div>

</body>
</html>                                		
