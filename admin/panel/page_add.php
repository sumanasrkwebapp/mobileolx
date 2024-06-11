<div class="preloader"><div class="cssload-speeding-wheel"></div></div>
<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2>Add Page</h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-sm-12">

                <div class="white-box">
                    <div id="post_error"></div>
                    <form name="form2" style="margin-top: 5%" class="form form-horizontal" method="post" data-ajax-action="addStaticPage" id="sidePanel_form">
                        <div class="form-body">

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Slug:</label>
                                    <input name="slug" type="text" class="form-control" placeholder="Enter Page ID">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Name:</label>
                                    <input name="name" type="text" class="form-control"  placeholder="Enter Page Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Title:</label>
                                    <input name="title" type="text" class="form-control"  placeholder="Enter Page Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Type:</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="0" selected>Standard</option>
                                        <option value="1">Logged In Only</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label class="css-input switch switch-sm switch-success">
                                        <strong>Active</strong> <input  name="active" type="checkbox" value="1" checked=""/><span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Content:</label>
                                    <textarea name="content" rows="6" id="pageContent" class="form-control" placeholder="Enter Page Content"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="submit">

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
<!-- CRUD FORM CONTENT - crud_fields_scripts stack -->
<link media="all" rel="stylesheet" type="text/css" href="assets/js/plugins/simditor/styles/simditor.css" />
<script src="assets/js/plugins/simditor/scripts/mobilecheck.js"></script>
<script src="assets/js/plugins/simditor/scripts/module.js"></script>
<script src="assets/js/plugins/simditor/scripts/uploader.js"></script>
<script src="assets/js/plugins/simditor/scripts/hotkeys.js"></script>
<script src="assets/js/plugins/simditor/scripts/simditor.js"></script>
<script>
    (function() {
        $(function() {
            var $preview, editor, mobileToolbar, toolbar, allowedTags;
            Simditor.locale = 'en-US';
            toolbar = ['bold','italic','underline','fontScale','|','ol','ul','blockquote','table','link'];
            mobileToolbar = ["bold", "italic", "underline", "ul", "ol"];
            if (mobilecheck()) {
                toolbar = mobileToolbar;
            }
            allowedTags = ['br','span','a','img','b','strong','i','strike','u','font','p','ul','ol','li','blockquote','pre','h1','h2','h3','h4','hr','table'];
            editor = new Simditor({
                textarea: $('#pageContent'),
                placeholder: 'Describe what makes your ad unique...',
                toolbar: toolbar,
                pasteImage: false,
                defaultImage: 'assets/js/plugins/simditor/images/image.png',
                upload: false,
                allowedTags: allowedTags
            });
            $preview = $('#preview');
            if ($preview.length > 0) {
                return editor.on('valuechanged', function(e) {
                    return $preview.html(editor.getValue());
                });
            }
        });
    }).call(this);
</script>





