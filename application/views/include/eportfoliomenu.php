<div class="container-fluid">
<div class="row">
<div class="col-lg-12"> 
    
            <?php
           
            $_mmenu['Dashboard']["Dashboard"]["title"]="Dashboard1";
            $_mmenu['Dashboard']["Dashboard"]["link"]="Dashboard1Link";

            
            $_mmenu['Contents']["Contents1"]["title"]="Resume";
            $_mmenu['Contents']["Contents1"]["link"]="./Contents/skill";
            
            $_mmenu['Contents']["Contents2"]["title"]="Skill";
            $_mmenu['Contents']["Contents2"]["link"]="./Contents/skill";
            
            $_mmenu['Contents']["Contents3"]["title"]="Exprerain";
            $_mmenu['Contents']["Contents3"]["link"]="./Contents/skill";
            
            $_mmenu['Portfolios']["Portfolios1"]["title"]="Portfolios1";
            $_mmenu['Portfolios']["Portfolios1"]["link"]="./Contents/skill";
            
            $_mmenu['Portfolios']["Portfolios2"]["title"]="Portfolios2";
            $_mmenu['Portfolios']["Portfolios2"]["link"]="./Contents/skill";
            


             if(!isset($_mm)){$_mm="Dashboard"; $_sm=1;}

             echo '<ul class="nav nav-tabs">';
             foreach ($_mmenu as $key => $value) {
                    if($mainmenu==$key){
                            $ac=" class='active' ";
                    }else{
                            $ac="";
                    }
                    echo '<li role="presentation" '.$ac.'><a href="../'.$key.'/index">'.$key.'</a></li>';
             }
             echo "</ul>";

             echo '<br><ul class="nav nav-pills">';
             foreach ($_mmenu[$mainmenu] as $key => $value) {
                 
                 if($mainmenu<>$key){
                        //var_dump($value['title']);
                        
                        if($submenu==$value['title']){
                               $ac=" class='active' ";
                        }else{
                               $ac="";
                        }
                        echo '<li role="presentation" id="'.$value['title'].'x" '.$ac.' ><a href="../'.$value['link'].'">'.$value['title'].'</a></li>';
                 }                            
             }
             ?>
                   
            <ul class="nav nav-pills navbar-right" id="page_title">            
                        <?php echo $button." ".$titlepage;   ?>
            </ul>
            </ul>
          
</div>
</div>
</div>
<br> 