<?php
require_once('includes.php');
?>

<link rel="stylesheet" href="assets/js/plugins/datatables/jquery.dataTables.min.css" />
<div class="content" style="margin-top: 2%">

    

        
        <div class="card">
            <div class="card-header">
                <h4>Active Ads</h4>
                <div class="pull-right">
                    <a href="setting.php#markad_frontend_submission" class="btn btn-success     m-r-10">Post ad setting</a>
                </div>
            </div>
            <div class="card-block">
                <div id="js-table-list">
                    <table class="js-table-checkable table table-vcenter table-hover table-sm" id="ajax_datatable" data-jsonfile="post.php?status=active">
                        <thead>
                        <tr>
                            <th class="text-center w-5 sortingNone">
                                <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                    <input type="checkbox" id="check-all" name="check-all"><span></span>
                                </label>
                            </th>
                            <th><i class="ion-image"></i> Title</th>
                            <th class="hidden-xs hidden-sm">Username</th>
                            <th class="hidden-xs w-30">Location</th>
                            <th class="hidden-xs hidden-sm" style="width:100px">Posted</th>
                            <th class="hidden-xs hidden-sm" style="width:100px">Status</th>
                            <th class="text-center" style="width: 128px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="ajax-services">

                        </tbody>
                    </table>

                </div>


            </div>
            
        </div>
        
        


    
    

</div>




<?php include("footer.php"); ?>

<script>
    $(function()
    {
        // Init page helpers (Table Tools helper)
        App.initHelpers('table-tools');

        // Init page helpers (BS Notify Plugin)
        App.initHelpers('notify');
    });
</script>
</body>

</html>

