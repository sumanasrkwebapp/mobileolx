<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2>Add Language (Process take 5-10 minutes.)</h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div id="post_error"></div>
                    <form name="form2" style="margin-top: 2%" class="form form-horizontal" method="post" data-ajax-action="addLanguage" id="sidePanel_form">
                        <div class="form-body">
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Language name *</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input type="text" name="name" value="" placeholder="Language name" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Code (ISO 639-1)*</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input type="text" name="code" value="" placeholder="Code (ISO 639-1)" class="form-control" required="">
                                        <p class="help-block"><a href="https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes" target="_blank">https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Direction *</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <select name="direction" class="form-control">
                                            <option value="ltr" selected="">ltr</option>
                                            <option value="rtl">rtl</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Active</label>
                                <div class="col-sm-7">
                                    <label class="css-input switch switch-sm switch-success">
                                        <div class="form-group">
                                            <input  name="active" type="checkbox" value="1" checked=""/><span></span>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Auto Google Translate</label>
                                <div class="col-sm-7">
                                    <label class="css-input switch switch-sm switch-success">
                                        <div class="form-group">
                                            <input  name="auto_tran" type="checkbox" value="1" checked=""/><span></span>
                                        </div>
                                    </label>
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
