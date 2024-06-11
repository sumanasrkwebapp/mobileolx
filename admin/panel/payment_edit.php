<?php
require_once('../datatable-json/includes.php');

$info = ORM::for_table($config['db']['pre'].'payments')
    ->where('payment_id',$_GET['id'])
    ->find_one();
$status = $info['payment_install'];
$folder = $info['payment_folder'];
?>

<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2><?php echo ucfirst($folder);?> - Settings</h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-sm-12">

                <div class="white-box">
                    <div id="post_error"></div>
                    <form name="form2" style="margin-top: 2%" class="form form-horizontal" method="post" data-ajax-action="paymentEdit" id="sidePanel_form">
                        <div class="form-body">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Title:</label>
                                <div class="col-sm-6">
                                    <div  class="form-group">
                                        <input name="title" type="text" class="form-control" value="<?php echo $info['payment_title']?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Turn On/Off</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="install" id="install" class="form-control">
                                            <option value="1" <?php if($status == '1') echo "selected"; ?>>Enable</option>
                                            <option value="0" <?php if($status == '0') echo "selected"; ?>>Disable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <?php
                            if($folder == "paypal"){
                                ?>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Sandbox Mode On/Off </label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select name="paypal_sandbox_mode"  class="form-control">
                                                <option value="Yes" <?php if(get_option('paypal_sandbox_mode') == 'Yes') echo "selected"; ?>>Yes</option>
                                                <option value="No" <?php if(get_option('paypal_sandbox_mode') == 'No') echo "selected"; ?>>No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Sandbox Client ID:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="paypal_sandbox_id" type="text" class="form-control" placeholder="Enter your Sandbox Client ID" value="<?php echo get_option('paypal_sandbox_id')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Sandbox Client Secret:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="paypal_sandbox_secret" type="text" class="form-control" placeholder="Enter your Sandbox Client Secret" value="<?php echo get_option('paypal_sandbox_secret')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Paypal API Username:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="paypal_api_username" type="text" class="form-control" placeholder="Enter your Paypal API Username" value="<?php echo get_option('paypal_api_username')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Paypal API Password:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="paypal_api_password" type="text" class="form-control" placeholder="Enter your Paypal API Password" value="<?php echo get_option('paypal_api_password')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Paypal API Secret:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="paypal_api_signature" type="text" class="form-control" placeholder="Enter your Paypal API Secret" value="<?php echo get_option('paypal_api_signature')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Paypal App Client ID:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="paypal_client_id" type="text" class="form-control" placeholder="Enter your Paypal Client ID" value="<?php echo get_option('paypal_client_id')?>">
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if($folder == "stripe"){
                                ?>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Stripe Publishable Key:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="stripe_publishable_key" type="text" class="form-control" placeholder="Enter your Stripe Publishable Key" value="<?php echo get_option('stripe_publishable_key')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Stripe Secret Key:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="stripe_secret_key" type="text" class="form-control" placeholder="Enter your Stripe Secret Key" value="<?php echo get_option('stripe_secret_key')?>">
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            
                            <?php
                            if($folder == "razorpay"){
                                ?>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Razorpay Key:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="razorpay_key" type="text" class="form-control" placeholder="Enter your Razorpay Key" value="<?php echo get_option('razorpay_key')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Razorpay Secret:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="razorpay_secret" type="text" class="form-control" placeholder="Enter your Razorpay Secret" value="<?php echo get_option('razorpay_secret')?>">
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            
                            <?php
                            if($folder == "flutterwave"){
                                ?>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Staging Mode On/Off </label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select name="flutterwave_staging_mode"  class="form-control">
                                                <option value="Yes" <?php if(get_option('flutterwave_staging_mode') == 'Yes') echo "selected"; ?>>Yes</option>
                                                <option value="No" <?php if(get_option('flutterwave_staging_mode') == 'No') echo "selected"; ?>>No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Flutterwave Public Key:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="flutterwave_public_key" type="text" class="form-control" placeholder="Enter your Flutterwave Public Key" value="<?php echo get_option('flutterwave_public_key')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Flutterwave Secret Key:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="flutterwave_secret_key" type="text" class="form-control" placeholder="Enter your Flutterwave Secret Key" value="<?php echo get_option('flutterwave_secret_key')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Flutterwave Encryption Key:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="flutterwave_enc_key" type="text" class="form-control" placeholder="Enter your Flutterwave Encryption Key" value="<?php echo get_option('flutterwave_enc_key')?>">
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                            <?php
                            if($folder == "paytm"){
                                ?>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Paytm ENVIRONMENT:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="PAYTM_ENVIRONMENT" type="text" class="form-control" placeholder="Environment for TEST or PRODUCTION mode" value="<?php echo get_option('PAYTM_ENVIRONMENT')?>">
                                            <code class="help-block">Use PAYTM_ENVIRONMENT as 'PROD' if you wanted to do transaction in production environment else 'TEST' for doing transaction in testing environment.</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Paytm Merchant key:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="PAYTM_MERCHANT_KEY" type="text" class="form-control" placeholder="Enter your Merchant key" value="<?php echo get_option('PAYTM_MERCHANT_KEY')?>">
                                            <code class="help-block">Change this constant's value with Merchant key downloaded from portal</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Paytm Merchant ID:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="PAYTM_MERCHANT_MID" type="text" class="form-control" placeholder="Enter your MID (Merchant ID)" value="<?php echo get_option('PAYTM_MERCHANT_MID')?>">
                                            <code class="help-block">Change this constant's value with MID (Merchant ID) received from Paytm</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Paytm Website name:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="PAYTM_MERCHANT_WEBSITE" type="text" class="form-control" placeholder="Enter your Website name" value="<?php echo get_option('PAYTM_MERCHANT_WEBSITE')?>">
                                            <code class="help-block">Change this constant's value with Website name received from Paytm</code>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                            <?php
                            if($folder == "paystack"){
                                ?>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Paystack Secret Key:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="paystack_secret_key" type="password" class="form-control" placeholder="Enter your Paystack Secret Key" value="<?php echo get_option('paystack_secret_key')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 col-form-label">Paystack Public Key:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="paystack_public_key" type="text" class="form-control" placeholder="Enter your Paystack Public Key" value="<?php echo get_option('paystack_public_key')?>">
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                            <?php
                            if($folder == "payumoney"){
                                ?>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Live Mode/ Test Mode </label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select name="payumoney_sandbox_mode"  class="form-control">
                                                <option value="live" <?php if(get_option('payumoney_sandbox_mode') == 'live') echo "selected"; ?>>Live Mode</option>
                                                <option value="test" <?php if(get_option('payumoney_sandbox_mode') == 'test') echo "selected"; ?>>Test Mode</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Payumoney Merchant ID:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="payumoney_merchant_id" type="text" class="form-control" placeholder="Enter your Payumoney Merchant ID" value="<?php echo get_option('payumoney_merchant_id')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Payumoney Merchant Key:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="payumoney_merchant_key" type="text" class="form-control" placeholder="Enter your Payumoney Merchant Key" value="<?php echo get_option('payumoney_merchant_key')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Payumoney Merchant Salt:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="payumoney_merchant_salt" type="text" class="form-control" placeholder="Enter your Payumoney Merchant Salt" value="<?php echo get_option('payumoney_merchant_salt')?>">
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="row">
                                    <label class="col-sm-4 col-form-label">Payumoney Merchant Auth Header:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="payumoney_authheader_id" type="text" class="form-control" placeholder="Enter your Payumoney Merchant Auth Header" value="<?php echo get_option('payumoney_authheader_id')?>">
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>

                            <?php
                            if($folder == "2checkout"){
                                ?>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">2Checkout Account Number:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="checkout_account_number" type="text" class="form-control" placeholder="Enter your 2Checkout Account Number" value="<?php echo get_option('checkout_account_number')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Publishable Key:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="checkout_public_key" type="text" class="form-control" placeholder="Enter your 2Checkout Publishable Key." value="<?php echo get_option('checkout_public_key')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Private API Key:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="checkout_private_key" type="password" class="form-control" placeholder="Enter your 2Checkout Private Key" value="<?php echo get_option('checkout_private_key')?>">
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                            <?php
                            if($folder == "moneybookers"){
                                ?>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Skrill Merchant Id:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="skrill_merchant_id" type="text" class="form-control" placeholder="Enter your skrill(moneybookers) merchant id" value="<?php echo get_option('skrill_merchant_id')?>">
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                            <?php
                            if($folder == "nochex"){
                                ?>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">NoChex Merchant Id:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           <input name="nochex_merchant_id" type="text" class="form-control" placeholder="Enter your NoChex Merchant Id" value="<?php echo get_option('nochex_merchant_id')?>">
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                            <?php
                            if($folder == "wire_transfer"){
                                ?>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Bank Information :</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <textarea name="company_bank_info" rows="6" type="text" placeholder="Write Information about Bank transfer" class="form-control"><?php echo get_option('company_bank_info')?></textarea>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if($folder == "cheque"){
                                ?>
                                <div class="form-group">
                                    <label class="col-sm-4 col-form-label">Cheque Information:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <textarea name="company_cheque_info" rows="6" type="text" placeholder="Write Cheque Information" class="form-control"><?php echo get_option('company_cheque_info')?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Cheque Payable To:</label>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="cheque_payable_to" type="text" class="form-control" placeholder="Payable To" value="<?php echo get_option('cheque_payable_to')?>">
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>

                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="slidePanel-actions">
    <div class="btn-group-flat">
        <button type="button" class="btn btn-warning btn-sm waves-effect waves-float waves-light margin-right-10" id="post_sidePanel_data">Save</button>
        <button type="button" class="btn btn-default btn-sm waves-effect waves-float waves-light margin-right-10 slidePanel-close" aria-hidden="true" data-dismiss="modal">Close</button>
    </div>
</div>

