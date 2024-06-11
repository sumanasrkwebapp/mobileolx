<?php
require_once('includes.php');

?>


<div class="content" style="margin-top: 2%">

    
    <div class="container-fluid p-y-md">
        
        <div class="card">
            <div class="card-header">
                <h4>Pages</h4>
                <div class="pull-right">
                    <a href="#" data-url="panel/page_add.php" data-toggle="slidePanel" class="btn btn-success waves-effect waves-light m-r-10">Add Page</a>
                </div>
            </div>
            <div class="card-block">
                <div id="js-table-list">
                    <table id="ajax_datatable" data-jsonfile="pages.php" class="js-table-sections js-table-checkable table table-vcenter table-hover" data-tablesaw-mode="stack" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
                        <thead>
                        <tr>
                            <th class="text-center w-5 sortingNone">
                                <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                    <input type="checkbox" id="check-all" name="check-all"><span></span>
                                </label>
                            </th>
                            <th>Name</th>
                            <th>Page Title</th>
                            <th class="sortingNone">Page URL</th>
                            <th class="sortingNone">Action</th>
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

<script type="text/javascript">
    jQuery(document).ready(function($) {

        function register_details_row_button_action() {
            // Add event listener for opening and closing details
            $('#ajax_datatable tbody').on('click', 'td .details-row-button', function () {
                var table = $('#ajax_datatable').DataTable();
                var tr = $(this).closest('tr');
                var btn = $(this);
                var row = table.row( tr );

                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    $(this).removeClass('fa-minus-square-o').addClass('fa-plus-square-o');
                    $('div.table_row_slider', row.child()).slideUp( function () {
                        row.child.hide();
                        tr.removeClass('shown');
                    } );
                }
                else {
                    // Open this row
                    $(this).removeClass('fa-plus-square-o').addClass('fa-minus-square-o');
                    // Get the details with ajax
                    var $jsonfile = jQuery( '#ajax_datatable').data('jsonfile');
                    var id = btn.data('entry-id');
                    var action = btn.data('entry-action');
                    var data = {action: action, id: id};

                    $.ajax({
                        type: "POST",
                        url :"datatable-json/"+$jsonfile,
                        data: data
                        // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                        // data: {param1: 'value1'},
                    })
                    .done(function(data) {
                        //console.log("-- success getting table extra details row with AJAX");
                        row.child("<div class='table_row_slider'>" + data + "</div>", 'no-padding').show();
                        tr.addClass('shown');
                        $('div.table_row_slider', row.child()).slideDown();
                    })
                    .fail(function(data) {
                        // console.log("-- error getting table extra details row with AJAX");
                        row.child("<div class='table_row_slider'>There was an error loading the details. Please retry.</div>").show();
                        tr.addClass('shown');
                        $('div.table_row_slider', row.child()).slideDown();
                    })
                    .always(function(data) {
                        // console.log("-- complete getting table extra details row with AJAX");
                    });
                }
            } );
        }

        register_details_row_button_action();

    });
</script>

</body>

</html>