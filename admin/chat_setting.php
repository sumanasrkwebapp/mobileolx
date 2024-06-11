<?php
require_once('includes.php');
$message = "";

if(isset($_POST['update']))
{
    if(!check_allow()){
        ?>
        <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#sa-title').trigger('click');
            });
        </script>
    <?php

    }
    else {

       

        if(isset($_POST['ichat_on_off'])){
            $ichat_purchase = get_option("ichat_purchase_code");
            if($ichat_purchase == NULL) {
                $message .= '<span style="color:red;">( Enter Your Valid Ichat Purchase Code.)</span>';
            }
            else{
                update_option("ichat_on_off",$_POST['ichat_on_off']);
            }
        }
        else{
            update_option("ichat_on_off","off");
        }

        if(isset($_POST['iichat_on_off'])){
            $iichat_purchase = get_option("iichat_purchase_code");
            if($iichat_purchase == "") {
                $message .= '<span style="color:red;">( Enter Your Valid  Purchase Code.)</span>';
            }
            else{
                update_option("iichat_on_off",$_POST['iichat_on_off']);
            }
        }
        else{
            update_option("iichat_on_off","off");
        }

        if(isset($_POST['ichat_purchase_code'])){
            if($_POST['ichat_purchase_code'] != "") {
                $purchase_data = verify_envato_purchase_code($_POST['ichat_purchase_code']);
                if(isset($purchase_data['verify-purchase']['buyer']) )
                {
                    if($purchase_data['verify-purchase']['item_id'] == '16491266'){
                        $code = $_POST['ichat_purchase_code'];
                        $output = install_chat_setting($code);

                        if ($output['success']) {
                            if(isset($config['ichat_secret_file']) && $config['ichat_secret_file'] != ""){
                                $fileName = $config['ichat_secret_file'];
                            }else{
                                $fileName = get_random_string();
                            }
                            file_put_contents('../plugins/ichat/' . $fileName . '.php', $output['data']);
                            $success = true;
                            update_option("ichat_secret_file",$fileName);
                            update_option("ichat_purchase_code",$_POST['ichat_purchase_code']);
                            $message = 'Ichat Purchase code verified successfully';
                            transfer("chat_setting.php",$message);
                            exit;
                        } else {
                            $error = $output['error'];
                            $message .= '<span style="color:red;">'.$error.'</span>';
                        }

                    }else{
                        $message .= '<span style="color:red;">( Invalid Ichat Purchase Code.)</span>';
                    }
                }
                else{
                    $message .= '<span style="color:red;">( Enter Your Valid Ichat Purchase Code.)</span>';
                }


            }
        }

        if(isset($_POST['iichat_purchase_code'])){
            if($_POST['iichat_purchase_code'] != "") {

                $purchase_data = verify_envato_purchase_code($_POST['iichat_purchase_code']);
                if(isset($purchase_data['verify-purchase']['buyer']) )
                {
                    if($purchase_data['verify-purchase']['item_id'] == '18047319'){
                        $code = $_POST['iichat_purchase_code'];
                        $output = install_chat_setting($code);

                        if ($output['success']) {
                            if(isset($config['iichat_SECRET_FILE']) && $config['iichat_SECRET_FILE'] != ""){
                                $fileName = $config['iichat_SECRET_FILE'];
                            }else{
                                $fileName = get_random_string();
                            }
                            file_put_contents('../plugins/iichat/' . $fileName . '.php', $output['data']);
                            $success = true;
                            update_option("iichat_SECRET_FILE",$fileName);
                            update_option("iichat_purchase_code",$_POST['iichat_purchase_code']);
                            $message = ' Purchase code verified successfully';
                            transfer("chat_setting.php",$message);
                            exit;
                        } else {
                            $error = $output['error'];
                            $message .= '<span style="color:red;">'.$error.'</span>';
                        }
                    }else{
                        $message .= '<span style="color:red;">( Invalid Purchase Code.)</span>';
                    }
                }
                else{
                    $message .= '<span style="color:red;">( Enter Your Valid Purchase Code.)</span>';
                }
            }
        }
    }
}

?>
<div class="content" style="margin-top: 2%">

    
    <div class="container-fluid p-y-md">
        
        <div class="card">
            <div class="card-header">
                <h4>Chat Setting</h4>
            </div>
            <div class="card-block">
                <form name="form2" class="form form-horizontal" method="post" action="" id="send2">
                    <div class="form-body">
                        <div>
                            <div class="text-left"><?php echo $message; ?></div>
                        </div>
                       
                        <?php
                        if(isset($config['ichat_purchase_code']) && $config['ichat_purchase_code'] != ""){
                            ?>
                            <div class="form-group bt-switch">
                                <label class="col-sm-4 control-label">Ichat on/off:</label>
                                <div class="col-sm-6">
                                    <label class="css-input switch switch-success">
                                        <input  name="ichat_on_off" type="checkbox" <?php if (get_option("ichat_on_off") == 'on') { echo "checked"; } ?> /><span></span>
                                    </label>

                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Ichat Purchase Code:</label>
                            <div class="col-sm-6">
                                <?php
                                if(isset($config['ichat_purchase_code']) && $config['ichat_purchase_code'] != ""){
                                    ?>
                                    <div class="alert alert-success">
                                        <strong>Success!</strong> Ichat Purchase code verified, you can on/off</div>
                                <?php
                                }
                                ?>
                                <input name="ichat_purchase_code" type="password" class="form-control" value="">
                            </div>
                        </div>


                        <?php
                        if(isset($config['iichat_purchase_code']) && $config['iichat_purchase_code'] != ""){
                            ?>
                            <div class="form-group bt-switch">
                                <label class="col-sm-4 control-label"> on/off:</label>
                                <div class="col-sm-6">
                                    <label class="css-input switch switch-success">
                                        <input  name="iichat_on_off" type="checkbox" <?php if (get_option("iichat_on_off") == 'on') { echo "checked"; } ?> /><span></span>
                                    </label>

                                </div>
                            </div>

                        <?php
                        }
                        ?>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">iichat Purchase Code:</label>
                            <div class="col-sm-6">
                                <?php
                                if(isset($config['iichat_purchase_code']) && $config['iichat_purchase_code'] != ""){
                                    ?>
                                    <div class="alert alert-success">
                                        <strong>Success!</strong> iichat Purchase code verified, you can on/off</div>
                                <?php
                                }
                                ?>
                                <input name="iichat_purchase_code" type="password" class="form-control" value="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label"></label>
                            <div class="col-sm-6">
                                <button name="update" type="submit" class="btn btn-primary btn-radius save-changes">Save</button>
                            </div>
                        </div>
                        

                    </div>

                </form>
            </div>
            
        </div>
        
        

    </div>
    
    

</div>
<?php include("footer.php"); ?>
<script>
    $(".save-changes").click(function(){
        $(".save-changes").addClass("bookme-progress");
    });
</script>
</body>

</html>