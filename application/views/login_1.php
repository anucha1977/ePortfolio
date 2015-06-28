<?php
$this->load->view('include/header');
?><div class="container">
    <div class="row clearfix">
        <div class="col-md-4 column">
        </div>
        <div class="col-md-4 column" style="background-color: #EBF3EC; margin-bottom: 20px ">
            <h3 class="text-primary">
                Login
            </h3>
            
            <form role="form" action="<?php echo base_url().'index.php/authan/session/email' ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="email" />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="password" />
                </div>
               
                <button type="submit" class="btn btn-default" style="margin-bottom: 10px">Submit</button>
            </form> 
            <div style="margin-bottom: 20px">
                <button type="button" class="btn btn-block btn-info btn-lg"  onClick="parent.location='<?php echo base_url().'index.php/authan/session/facebook'?>'">Facebook</button>
                <button type="button" class="btn btn-danger btn-block active btn-lg" onClick="parent.location='<?php echo base_url().'index.php/authan/session/google'?>'">Google</button>
            </div>
        </div>
        <div class="col-md-4 column">
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
        </div>
    </div>
</div>
<?php
$this->load->view('include/footer');
?>