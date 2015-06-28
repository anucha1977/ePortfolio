

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
				<?php 
				    $this->session->unset_userdata();
                                                                $this->session->sess_destroy();
				    echo "Logout completed ...";
				    $this->output->set_header('refresh:5;url=../welcome/index');
				?>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

