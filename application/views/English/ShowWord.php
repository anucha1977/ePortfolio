<?php
$this->load->view('include/header');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$number = range(0, 3);
shuffle($number);
?>

<script>



    $(document).ready(function() {


        $("#dialogFail").dialog({
            autoOpen: false,
            height: 200,
            width: 200,
            modal: true,
            buttons: {
                Ok: function() {
                    $(this).dialog("close");
                    location.reload();
                }
            }
        });
        

       /* $.ajax({
            url: '<?php echo base_url() . 'index.php/ajax/get'; ?>',
            type: "POST",
            data: 'new=new'
        }).success(function(result) {

            var obj = jQuery.parseJSON(result);
            $.each(obj, function(key, val) {
                alert(key + '-' + val.CustomerID);
            });

        });

*/
        $("button").click(function() {
            var id = this.id;
            $('#question').html('google.com');


        });


    });

</script>
<?php
form_open('Mycontroller/Checkword');
$ss = $this->session->all_userdata();
$fbinfo = $ss['fbinfo'];
$logouturl = $ss['logouturl'];
?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <?php
            $this->load->view('/include/Navbar', $logouturl, $fbinfo);
            ?>
            <div align="center"><h1 style="alignment-adjust: central" id ="question"><?php echo $word[0]['Word']; ?></h></div>
            <button type="button" name ="<?php echo "N" . $number[0]; ?>" id ="<?php echo "N" . $number[0]; ?>" class="btn btn-block btn-warning btn-lg"><?php echo $word[$number[0]]['Desc']; ?></button>
            <button type="button" name ="<?php echo "N" . $number[1]; ?>" id ="<?php echo "N" . $number[1]; ?>"class="btn btn-success btn-block btn-lg"><?php echo $word[$number[1]]['Desc']; ?></button>
            <button type="button" name ="<?php echo "N" . $number[2]; ?>" id ="<?php echo "N" . $number[2]; ?>"class="btn btn-lg btn-block btn-info"><?php echo $word[$number[2]]['Desc']; ?></button>
            <button type="button" name ="<?php echo "N" . $number[3]; ?>" id ="<?php echo "N" . $number[3]; ?>"class="btn btn-lg btn-block btn-danger"><?php echo $word[$number[3]]['Desc']; ?></button>
        </div>
    </div>
</div>
<?php form_close(); ?>
<div id="dialogFail" title="info">
    <p id="info">Wrong <br><?php echo $word[0]['Word'] . " -> " . $word[0]['Desc']; ?></p>
</div>

<?php
$this->load->view('include/footer');
?>