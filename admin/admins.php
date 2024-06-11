<?php
require_once('includes.php');
?>


<div class="content" style="margin-top: 2%">

    
    <div class="container-fluid p-y-md">
        
        <div class="card">
            <div class="card-header">
                <h4>Admin users</h4>
                <div class="pull-right">
                    <a href="#" data-url="panel/admin_add.php" data-toggle="slidePanel" class="btn btn-success waves-effect waves-light m-r-10">Add Admin User</a>
                </div>
            </div>
            <div class="card-block">
                <div id="js-table-list">
                    <table id="ajax_datatable" data-jsonfile="admins.php" class="js-table-checkable table table-vcenter table-hover" data-tablesaw-mode="stack" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
                        <thead>
                        <tr>
                            <th class="text-center w-5 sortingNone">
                                <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                    <input type="checkbox" id="check-all" name="check-all"><span></span>
                                </label>
                            </th>
                            <th><i class="ion-image"></i> Admin user</th>
                            <th class="w-10">Email</th>
                            <th style="width: 60px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="ajax-services">

                        </tbody>
                    </table>

                </div>

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
    });
</script>
</body>

</html>

