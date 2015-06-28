<?php
$info = $this->session->userdata('info');
$ss = $this->session->all_userdata();
$fbinfo = $ss['fbinfo'];
$logouturl = $ss['logouturl'];
?>


<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a>Menu</a>
            </li>
            <li>
                <a >
                    <!-- echo $fbinfo[name]." ".$fbinfo[last_name]; -->
                    <?php echo "Hello : " . $fbinfo['first_name'] . "    " . $fbinfo['last_name']; ?>
                </a>


            </li>
            <li>
                <a >
                    score
                </a>


            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="<?php echo $logouturl ?>">Logout</a>
            </li>

        </ul>
    </div>

</nav>