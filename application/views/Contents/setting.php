<h1 class="page-header">การตั้งค่าบัญชีผู้ใช้ทั่วไป</h1>
                

                <?php if($this->input->post('_action')=="updateprofile"):?>
                    <div class="alert alert-success">
                        Update Compeletd <a href="#" class="alert-link">Alert Link</a>.
                        <?php var_dump($this->input->post()); ?>
                    </div>
                    <div class="alert alert-danger" >
                        Update error. <a href="#" class="alert-link">Alert Link</a>.
                        <?php var_dump($this->input->post()); ?>
                    </div>
                <?php else:?>
                    
                <?php endif?>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                <div class="pull-right">
                    <div class="btn-group">                                    
                    </div>
                </div>
            </div>

            <!-- /.panel-heading -->
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>Anucha Ruangsiriwattanakul</td>
                                <td class="col-md-1">
                                    <!-- Button trigger modal -->                            
                                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                                        <i class="fa  fa-pencil  fa-fw"></i> Edit
                                    </button>
                                </td>                                            
                            </tr>

                           
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- /.panel -->
    </div>
</div>

            


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>

            <?php echo form_open('eportfolio/profile'); ?>
            <div class="modal-body">
                
                        <input type="hidden" name="_action" value="updateprofile">
                        <fieldset>
                            <div class="form-group">
                                <label>Email address:</label>
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>                                                        
                        </fieldset>
                    
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" data-submit="modal"> Save changes</input>                                        
            </div>

            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


                            
                            



