<?php
require_once('includes.php');
?>

<link href="js/plugins/jqueryui/jquery-ui.min.css" rel="stylesheet">

<!-- /.Language Translation modal -->
<div id="modal_LangTranslation" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                <h4 class="modal-title">Edit Language Translation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    
                </div>
                <div class="modal-body">
                    <div class="loader" style="text-align: center;">
                        <img src="../loading.gif"/>
                    </div>
                    <div class="form-horizontal" id="displayData">
                        <!--Dynamic form fields-->
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="saveEditLanguage">Save</button>
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.Language Translation modal -->

<!-- Page Content -->
<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <!-- Partial Table -->
        <div class="card">
            <div class="card-header">
                <h4>Categories</h4>
            </div>
            <div class="card-block">
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div id="markad-tbs" class="wrap">
                                <div class="markad-tbs-body">
                                    <div class="row">
                                        <div id="markad-sidebar" class="col-sm-4">
                                            <div id="markad-categories-list" class="markad-nav">
                                                <div class="markad-nav-item active markad-category-item markad-js-all-services">
                                                    <div class="markad-padding-vertical-xs">All Categoriescdcsdc</div>
                                                </div>
                                                <ul id="markad-category-item-list" class="ui-sortable">
                                                    <?php
                                                    $rows = ORM::for_table($config['db']['pre'].'catagory_main')
                                                        ->order_by_asc('cat_order')
                                                        ->find_many();

                                                    foreach ($rows as $row) {
                                                        $catid = $row['cat_id'];
                                                        $catname = $row['cat_name'];
                                                        $caticon = $row['icon'];
                                                        $catslug = $row['slug'];
                                                        $catpicture = $row['picture'];
                                                        ?>
                                                        <li class="markad-nav-item markad-category-item" data-category-id="<?php echo $catid; ?>">
                                                            <div class="markad-flexbox">
                                                                <div class="markad-flex-cell markad-vertical-middle" style="width: 1%">
                                                                    <i class="markad-js-handle markad-icon markad-icon-draghandle markad-margin-right-sm markad-cursor-move ui-sortable-handle" title="Reorder"></i>

                                                                </div>
                                                                <div class="markad-flex-cell markad-vertical-middle">
                                                            <span class="displayed-value" style="display: inline;">
                                                                <i id="markad-cat-icon" class="markad-margin-right-sm <?php echo $caticon; ?>"
                                                                   title="<?php echo $catname; ?>"></i> <?php echo $catname; ?>
                                                            </span>
                                                                    <form method="post" id="edit-category-form" style="display: none" enctype="multipart/form-data">
                                                                        <div class="form-field form-required">
                                                                            <label for="markad-category-name" style="color:#000;">Title</label>
                                                                            <input class="form-control input-lg" id="cat-name" type="text" name="name" value="<?php echo $catname; ?>">
                                                                        </div>
                                                                        <div class="form-field form-required">
                                                                            <label for="markad-category-name" style="color:#000;">Category icon class</label>
                                                                            <input class="form-control input-lg" id="cat-icon" type="text" name="icon" placeholder="Add icon class"
                                                                                   value="<?php echo $caticon; ?>">
                                                                        </div>
                                                                        <div class="form-field form-required">
                                                                            <label for="markad-category-slug" style="color:#000;">Slug</label>
                                                                            <input class="form-control input-lg" id="cat-slug" type="text" name="slug"
                                                                                   value="<?php echo $catslug; ?>">
                                                                        </div>
                                                                        <div class="form-field form-required">
                                                                            <label for="markad-category-slug" style="color:#000;">Picture</label>
                                                                            <?php $pic = explode('/',$catpicture);
                                                                                    echo '<br>'.$pic[3];
                                                                             ?>
                                                                            <input type="text" id="cat-picture" name="picture" value="<?php echo $catpicture; ?>">
                                                                            <input type="file" id="cat-picture" name="picture_url"
                                                                                   value="<?php echo $catpicture; ?>">
                                                                            <!-- <input class="form-control input-lg" id="cat-picture" type="text" name="picture"
                                                                                   value="<?php echo $catpicture; ?>"> -->
                                                                        </div>
                                                                        <input class="form-control input-lg" id="cat-id" type="hidden" name="id"
                                                                               value="<?php echo $catid; ?>" >
                                                                        <div class="text-right">
                                                                            <button type="submit" class="btn btn-success confirm">Save</button>
                                                                            <button type="button" id="cancel-button" class="btn btn-default">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="markad-flex-cell markad-vertical-middle" style="width: 1%;font-size: 18px;">
                                                                    <?php
                                                                    if(get_option("userlangsel") == '1'){
                                                                        ?>
                                                                        <a href="#" class="fa fa-language text-default markad-margin-horizontal-xs markad-cat-lang-edit" data-category-id="<?php echo $catid; ?>" data-category-type="main" title="Edit-language"></a>
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="markad-flex-cell markad-vertical-middle" style="width: 1%;font-size: 18px;">
                                                                    <a href="#" class="fa fa-pencil-square-o markad-margin-horizontal-xs markad-js-edit" title="Edit"></a>
                                                                </div>
                                                                <div class="markad-flex-cell markad-vertical-middle" style="width: 1%;font-size: 18px;">
                                                                    <!--<a href="#" class="fa fa-trash-o text-danger markad-js-delete"
                                                                       title="Delete"></a>-->
                                                                    <button type="button" class="text-danger markad-js-delete" style="border:none;background:  transparent;"><i class="fa fa-trash-o"></i></button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php  } ?>
                                                </ul>
                                            </div>

                                            <div class="form-group">
                                                <button id="markad-new-category" type="button" class="btn btn-lg btn-block btn-success-outline"
                                                        data-original-title="" title=""><i class="dashicons dashicons-plus-alt"></i>New Category
                                                </button>
                                            </div>
                                            <form method="post" id="new-category-form" style="display: none" enctype="multipart/form-data">
                                                <div class="form-group markad-margin-bottom-md">
                                                    <div class="form-field form-required">
                                                        <label for="markad-category-name">Title</label>
                                                        <input class="form-control" id="markad-category-name" type="text" name="name" required=""/>
                                                    </div>
                                                    <div class="form-field form-required">
                                                        <label for="markad-category-slug">Slug</label>
                                                        <input class="form-control" id="markad-category-slug" type="text" name="slug" required=""/>
                                                    </div>
                                                    <div class="form-field form-required">
                                                        <label for="markad-category-name">Icon class for Category</label>
                                                        <input class="form-control" id="markad-category-icon" type="text" name="icon" placeholder="fa fa-usd" required=""/>
                                                    </div>
                                                    <div class="form-field form-required">
                                                        <label for="markad-category-name">Picture url</label>
                                                        <input class="form-control" id="markad-category-icon" type="text" name="picture"/>
                                                        <input class="form-control file_upload" id="markad-category-icon" type="file" name="picture_url"/>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-success confirm">Save</button>
                                                    <button type="button" id="cancel-button" class="btn btn-default">Cancel</button>
                                                </div>
                                            </form>


                                        </div>

                                        <div id="markad-services-wrapper" class="col-sm-8">
                                            <div class="panel panel-default markad-main">
                                                <div class="panel-body">
                                                    <h4 class="markad-block-head">
                                                        <span class="markad-category-title">All Categories</span>
                                                        <button type="button" class="new-subcategory  ladda-button pull-right btn btn-success"
                                                                data-spinner-size="40" data-style="zoom-in">
                                                            <span class="ladda-label"><i class="glyphicon glyphicon-plus"></i>Add Sub-Category</span>
                                                        </button>
                                                    </h4>
                                                    <form method="post" id="new-subcategory-form" style="display: none" enctype="multipart/form-data">
                                                        <div class="form-group markad-margin-bottom-md">
                                                            <div class="form-field form-required">
                                                                <label for="new-subcategory-name">Title</label>
                                                                <input class="form-control" id="new-subcategory-name" type="text" name="name" required=""/>
                                                                <input type="hidden" id="cat-id" name="cat_id" value="0">
                                                            </div>
                                                            <div class="form-field form-required">
                                                                <label for="markad-category-slug">Slug</label>
                                                                <input class="form-control" id="new-subcategory-slug" type="text" name="slug" required=""/>
                                                            </div>
                                                            <div class="form-field form-required">
                                                                <label for="markad-category-name">Icon class for Category</label>
                                                                <input class="form-control" id="new-subcategory-icon" type="text" name="icon" placeholder="fa fa-usd" required=""/>
                                                            </div>
                                                            <div class="form-field form-required">
                                                                <label for="markad-category-name">Picture url</label>
                                                                <input class="form-control" id="new-subcategory-icon" type="text" name="picture"/>
                                                                <input class="form-control file_upload" id="new-subcategory-icon" type="file" name="picture_url"/>
                                                            </div>
                                                        </div>
                                                        <div class="text-right">
                                                            <button type="submit" class="btn btn-success confirm">Save</button>
                                                            <button type="button" id="cancel-button" class="btn btn-default">Cancel</button>
                                                        </div>
                                                    </form>

                                                    <p class="markad-margin-top-xlg no-result" style="display: none;">No services found. Please add services</p>

                                                    <div class="markad-margin-top-xlg" id="ab-services-list">
                                                        <div class="panel-group ui-sortable" id="services_list" role="tablist" aria-multiselectable="true">

                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="button" id="markad-delete" class="btn btn-danger ladda-button"
                                                                data-spinner-size="40" data-style="zoom-in"><span class="ladda-label"><i
                                                                        class="glyphicon glyphicon-trash"></i> Delete</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="markad-alert" class="markad-alert"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- .card-block -->
        </div>
        <!-- .card -->
        <!-- End Partial Table -->

    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>


<script>
    
</script>
<?php include("footer.php"); ?>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="js/plugins/jqueryui/jquery-ui.min.js"></script>
<script src="js/custom-manage/category.js"></script>
<script src="js/custom-manage/alert.js"></script>
</body></html>
