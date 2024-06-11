jQuery(function($) {
    var $no_result = $('#markad-services-wrapper .no-result');
    // Remember user choice in the modal dialog.
    var update_staff_choice = null,
        $new_category_popover = $('#markad-new-category'),
        $new_category_form = $('#new-category-form'),
        $new_category_name = $('#markad-category-name');

    $new_category_popover.popover({
        html: true,
        placement: 'bottom',
        template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
        content: $new_category_form.show().detach(),
        trigger: 'manual'
    }).on('click', function () {
        $(this).popover('toggle');
    }).on('shown.bs.popover', function () {
        // focus input
        $new_category_name.focus();
    }).on('hidden.bs.popover', function () {
        //clear input
        $new_category_name.val('');
    });

    // Save new category.
    $new_category_form.on('submit', function() {
        //var data = $(this).serialize();
        var formData = new FormData($(this)[0]);
        $(this).find('.confirm').addClass('bookme-progress');
        $.ajax({
            url: ajaxurl+'?action=addNewCat',
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if(response != 0){
                    $data = response.split(',');
                    $name = $data[0];
                    $id = $data[1];
                    $icon = $data[2];
                    $slug = $data[3];
                    var appendtpl = '<li class="markad-nav-item markad-category-item" ' +
                        'data-category-id="' + $id + '"> ' +
                        '<div class="markad-flexbox">' +
                        '<div class="markad-flex-cell markad-vertical-middle" style="width: 1%">' +
                        '<i class="markad-js-handle markad-icon markad-icon-draghandle markad-margin-right-sm markad-cursor-move ui-sortable-handle" title="Reorder"></i></div>' +
                        '<div class="markad-flex-cell markad-vertical-middle"> <span class="displayed-value" style="display: inline;"><i id="markad-cat-icon" class="markad-margin-right-sm fa ' + $icon + '"></i> ' + $name + ' </span> <form method="post" id="edit-category-form" style="display: none"><div class="form-field form-required"> <label for="markad-category-name" style="color:#000;">Title</label> <input class="form-control input-lg" id="cat-name" type="text" name="name" value="' + $name + '">  </div> <div class="form-field form-required">  <label for="markad-category-name" style="color:#000;">Category icon</label>  <input class="form-control input-lg" id="cat-icon" type="text" name="icon" placeholder="fa fa-usd"   value="' + $icon + '"> </div> ' +
                        '<div class="form-field form-required"> <label for="markad-category-slug" style="color:#000;">Slug</label> <input class="form-control input-lg" id="cat-slug" type="text" name="slug" value="' + $slug + '">  </div><input class="form-control input-lg" id="cat-id" type="hidden" name="id"  value="' + $id + '" > <div class="text-right">  <button type="submit" class="btn btn-success">Save</button> <button type="button" id="cancel-button" class="btn btn-default">Cancel</button>  </div>  </form> </div> <div class="markad-flex-cell markad-vertical-middle" style="width: 1%;font-size: 18px;"><a href="#" class="fa fa-language text-default markad-margin-horizontal-xs markad-cat-lang-edit" data-category-id="'+$id+'" data-category-type="main" title="Edit-language"></a></div><div class="markad-flex-cell markad-vertical-middle" style="width: 1%"> <a href="#" class="glyphicon glyphicon-edit markad-margin-horizontal-xs markad-js-edit" title="Edit"></a> </div> <div class="markad-flex-cell markad-vertical-middle" style="width: 1%"> <a href="#" class="glyphicon glyphicon-trash text-danger markad-js-delete" title="Delete"></a> </div> </div> </li>';
                    $('#markad-category-item-list').append(appendtpl);
                    $('#new-category-form .confirm').removeClass('bookme-progress');
                    $new_category_popover.popover('hide');
                }
            }
        });
        // $.post(ajaxurl+'?action=addNewCat', data, function(response) {
        //     if(response != 0){
        //         $data = response.split(',');
        //         $name = $data[0];
        //         $id = $data[1];
        //         $icon = $data[2];
        //         $slug = $data[3];
        //         var appendtpl = '<li class="markad-nav-item markad-category-item" ' +
        //             'data-category-id="' + $id + '"> ' +
        //             '<div class="markad-flexbox">' +
        //             '<div class="markad-flex-cell markad-vertical-middle" style="width: 1%">' +
        //             '<i class="markad-js-handle markad-icon markad-icon-draghandle markad-margin-right-sm markad-cursor-move ui-sortable-handle" title="Reorder"></i></div>' +
        //             '<div class="markad-flex-cell markad-vertical-middle"> <span class="displayed-value" style="display: inline;"><i id="markad-cat-icon" class="markad-margin-right-sm fa ' + $icon + '"></i> ' + $name + ' </span> <form method="post" id="edit-category-form" style="display: none"><div class="form-field form-required"> <label for="markad-category-name" style="color:#000;">Title</label> <input class="form-control input-lg" id="cat-name" type="text" name="name" value="' + $name + '">  </div> <div class="form-field form-required">  <label for="markad-category-name" style="color:#000;">Category icon</label>  <input class="form-control input-lg" id="cat-icon" type="text" name="icon" placeholder="fa fa-usd"   value="' + $icon + '"> </div> ' +
        //             '<div class="form-field form-required"> <label for="markad-category-slug" style="color:#000;">Slug</label> <input class="form-control input-lg" id="cat-slug" type="text" name="slug" value="' + $slug + '">  </div><input class="form-control input-lg" id="cat-id" type="hidden" name="id"  value="' + $id + '" > <div class="text-right">  <button type="submit" class="btn btn-success">Save</button> <button type="button" id="cancel-button" class="btn btn-default">Cancel</button>  </div>  </form> </div> <div class="markad-flex-cell markad-vertical-middle" style="width: 1%;font-size: 18px;"><a href="#" class="fa fa-language text-default markad-margin-horizontal-xs markad-cat-lang-edit" data-category-id="'+$id+'" data-category-type="main" title="Edit-language"></a></div><div class="markad-flex-cell markad-vertical-middle" style="width: 1%"> <a href="#" class="glyphicon glyphicon-edit markad-margin-horizontal-xs markad-js-edit" title="Edit"></a> </div> <div class="markad-flex-cell markad-vertical-middle" style="width: 1%"> <a href="#" class="glyphicon glyphicon-trash text-danger markad-js-delete" title="Delete"></a> </div> </div> </li>';
        //         $('#markad-category-item-list').append(appendtpl);
        //         $('#new-category-form .confirm').removeClass('bookme-progress');
        //         $new_category_popover.popover('hide');
        //     }
        // });

        return false;
    });

    // Cancel button.
    $new_category_form.on('click', '#cancel-button', function (e) {
        $new_category_popover.popover('hide');
    });


    var $new_subcategory_popover = $('.new-subcategory'),
        $new_subcategory_form = $('#new-subcategory-form'),
        $new_subcategory_name = $('#new-subcategory-name');

    // Cancel button.
    $new_subcategory_form.on('click', '#cancel-button', function (e) {
        $new_subcategory_popover.popover('hide');
    });

    $new_subcategory_popover.popover({
        html: true,
        placement: 'bottom',
        template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
        content: $new_subcategory_form.show().detach(),
        trigger: 'manual'
    }).on('click', function () {
        $(this).popover('toggle');
    }).on('shown.bs.popover', function () {
        // focus input
        $new_subcategory_name.focus();
    }).on('hidden.bs.popover', function () {
        //clear input
        $new_subcategory_name.val('');
    });

    // Save new category.
    $new_subcategory_form.on('submit', function() {
        $('#new-subcategory-form .confirm').addClass('bookme-progress');

        var id = $('.markad-category-item.active').data('category-id');
            //data = $(this).serialize();
        var formData = new FormData($('#new-subcategory-form')[0]);
        $('#cat-id').val(id);

        $.ajax({
            url: ajaxurl+'?action=addSubCat&mainid='+id,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if(response != 0){
                    $data = response.split(',');
                    $name = $data[0];
                    $id = $data[1];
                    var appendtpl = '<div class="panel panel-default markad-js-collapse" data-service-id="'+$id+'"> <div class="panel-heading" role="tab" id="s_'+$id+'"> <div class="row"> <div class="col-sm-8 col-xs-10"> <div class="markad-flexbox"> <div class="markad-flex-cell markad-vertical-middle" style="width: 1%"> <i class="markad-js-handle markad-icon markad-icon-draghandle markad-margin-right-sm markad-cursor-move ui-sortable-handle hide" title="Reorder"></i> </div> <div class="markad-flex-cell markad-vertical-middle"> <a role="button" class="panel-title collapsed markad-js-service-title" data-toggle="collapse" data-parent="#services_list"  href="#service_'+$id+'" aria-expanded="false" aria-controls="service_'+$id+'">'+$name+' </a> </div> </div> </div> <div class="col-sm-4 col-xs-2"> <div class="markad-flexbox"> <div class="markad-flex-cell markad-vertical-middle text-right" style="width: 10%"><div class="checkbox checkbox-success"> <input id="checkbox'+$id+'" type="checkbox" class="service-checker" value="'+$id+'"> <label for="checkbox'+$id+'"></label></div></div> </div> </div> </div> </div> <div id="service_'+$id+'" class="panel-collapse collapse" role="tabpanel"style="height: 0"> <div class="panel-body"> <form method="post" id="'+$id+'"> <div class="row"> <div class="col-md-12 col-sm-6"> <div class="form-group"> <label for="title_'+$id+'">Title</label> <input name="title" value="'+$name+'" id="title_'+$id+'" class="form-control" type="text"> <input name="id" value="'+$id+'" type="hidden"> </div> </div> </div> <div class="panel-footer"> <button type="button" class="btn btn-lg btn-warning markad-cat-lang-edit" data-category-id="'+$id+'" data-category-type="sub"> <span class="ladda-label"><i class="fa fa-language"></i> Edit Language</span></button><button type="button" class="btn btn-lg btn-success ladda-button ajax-subcat-edit" data-style="zoom-in" data-spinner-size="40" onclick="editSubCat('+$id+');"><span class="ladda-label">Save</span></button> <button class="btn btn-lg btn-default js-reset" type="reset">Reset </button> </div> </form> </div> </div> </div>';
                    $('#services_list').append(appendtpl);
                    markadAlert({success: ['Successfully created.']});
                    $('#new-subcategory-form .confirm').removeClass('bookme-progress');
                    $new_subcategory_popover.popover('hide');
                }else{
                    markadAlert({error: ['Problem in saving, Please try again.']});
                    $('#new-subcategory-form .confirm').removeClass('bookme-progress');
                    $new_subcategory_popover.popover('hide');
                }
            }
        });

        // $.post(ajaxurl+'?action=addSubCat&mainid='+id, data, function(response) {
        //     if(response != 0){
        //         $data = response.split(',');
        //         $name = $data[0];
        //         $id = $data[1];
        //         var appendtpl = '<div class="panel panel-default markad-js-collapse" data-service-id="'+$id+'"> <div class="panel-heading" role="tab" id="s_'+$id+'"> <div class="row"> <div class="col-sm-8 col-xs-10"> <div class="markad-flexbox"> <div class="markad-flex-cell markad-vertical-middle" style="width: 1%"> <i class="markad-js-handle markad-icon markad-icon-draghandle markad-margin-right-sm markad-cursor-move ui-sortable-handle hide" title="Reorder"></i> </div> <div class="markad-flex-cell markad-vertical-middle"> <a role="button" class="panel-title collapsed markad-js-service-title" data-toggle="collapse" data-parent="#services_list"  href="#service_'+$id+'" aria-expanded="false" aria-controls="service_'+$id+'">'+$name+' </a> </div> </div> </div> <div class="col-sm-4 col-xs-2"> <div class="markad-flexbox"> <div class="markad-flex-cell markad-vertical-middle text-right" style="width: 10%"><div class="checkbox checkbox-success"> <input id="checkbox'+$id+'" type="checkbox" class="service-checker" value="'+$id+'"> <label for="checkbox'+$id+'"></label></div></div> </div> </div> </div> </div> <div id="service_'+$id+'" class="panel-collapse collapse" role="tabpanel"style="height: 0"> <div class="panel-body"> <form method="post" id="'+$id+'"> <div class="row"> <div class="col-md-12 col-sm-6"> <div class="form-group"> <label for="title_'+$id+'">Title</label> <input name="title" value="'+$name+'" id="title_'+$id+'" class="form-control" type="text"> <input name="id" value="'+$id+'" type="hidden"> </div> </div> </div> <div class="panel-footer"> <button type="button" class="btn btn-lg btn-warning markad-cat-lang-edit" data-category-id="'+$id+'" data-category-type="sub"> <span class="ladda-label"><i class="fa fa-language"></i> Edit Language</span></button><button type="button" class="btn btn-lg btn-success ladda-button ajax-subcat-edit" data-style="zoom-in" data-spinner-size="40" onclick="editSubCat('+$id+');"><span class="ladda-label">Save</span></button> <button class="btn btn-lg btn-default js-reset" type="reset">Reset </button> </div> </form> </div> </div> </div>';
        //         $('#services_list').append(appendtpl);
        //         markadAlert({success: ['Successfully created.']});
        //         $('#new-subcategory-form .confirm').removeClass('bookme-progress');
        //         $new_subcategory_popover.popover('hide');
        //     }else{
        //         markadAlert({error: ['Problem in saving, Please try again.']});
        //         $('#new-subcategory-form .confirm').removeClass('bookme-progress');
        //         $new_subcategory_popover.popover('hide');
        //     }

        // });
        return false;
    });

    function editSubCat(id){
        $('.ajax-subcat-edit').addClass('bookme-progress');
        //var data = $('#'+id).serialize();
        var formData = new FormData($('#new-subcategory-form')[0]);
        $.post(ajaxurl+'?action=editSubCat&'+data, function (response) {
            if (response != 0) {
                markadAlert({success: ['Successfully edited']});
                $('.ajax-subcat-edit').removeClass('bookme-progress');
            } else {
                markadAlert({error: ['Problem in saving, Please try again.']});
                $('.ajax-subcat-edit').removeClass('bookme-progress');
            }
        });

        $.ajax({
            url: ajaxurl+'?action=editSubCat',
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                 if (response != 0) {
                    markadAlert({success: ['Successfully edited']});
                    $('.ajax-subcat-edit').removeClass('bookme-progress');
                } else {
                    markadAlert({error: ['Problem in saving, Please try again.']});
                    $('.ajax-subcat-edit').removeClass('bookme-progress');
                }
            }
        });
    }

    // Categories list delegated events.
    $(document)
        // On category item click.
        .on('click', '.markad-category-item', function(e) {
            if ($(e.target).is('.markad-js-handle')) return;
            $('#ab-services-list').html('<div class="markad-loading"></div>');
            var $clicked = $(this);

            $.get(ajaxurl, {action:'getSubCat', category_id: $clicked.data('category-id')}, function(response) {
                if ( response != 0 ) {
                    $('.markad-category-title').text($clicked.find('.displayed-value').text());
                    $('#ab-services-list').html(response);
                }else{
                    $('#ab-services-list').html('<h3>No sub category found.</h3>');
                }
                $('.markad-category-item').not($clicked).removeClass('active');
                $clicked.addClass('active');
                if($clicked.data('category-id') != undefined){
                    $('.new-subcategory').show();
                }else{
                    $('.new-subcategory').hide();
                }
                makeSortable();
            });

        })

        // On edit category click.
        .on('click', '.markad-js-edit', function(e) {
            // Keep category item click from being executed.
            e.stopPropagation();
            // Prevent navigating to '#'.
            e.preventDefault();
            var $this = $(this).closest('.markad-category-item');
            $this.find('.displayed-value').hide();
            $this.find('#markad-cat-icon').hide();
            $this.find('#edit-category-form').show();
        })

        // On blur save changes.
        .on('submit', '#edit-category-form', function() {

            var $this = $(this),
                $item = $this.closest('.markad-category-item');
                //data = $this.serialize();
            $this.find('.confirm').addClass('bookme-progress');
            // $.post(ajaxurl+'?action=editCat', data, function(response) {                
            //     if(response != 0) {
            //         value = response.split(',');
            //         // Hide input field.
            //         $item.find('form').hide();
            //         $item.find('.displayed-value').show();
            //         $item.find('#markad-cat-icon').show();
            //         // Show modified category name.
            //         $item.find('.displayed-value').text(value[0]);
            //         $item.find('#markad-cat-icon').attr('class','markad-margin-right-sm fa '+ value[1]);
            //         markadAlert({success: ['Successfully edited.']});
            //     }else{
            //         markadAlert({error: ['Problem in saving, Please try again.']});
            //     }
            //     $this.find('.confirm').removeClass('bookme-progress');
            // });

            var formData = new FormData($(this)[0]);
            $.ajax({
                url: ajaxurl+'?action=editCat',
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if(response != 0) {
                        value = response.split(',');
                        // Hide input field.
                        $item.find('form').hide();
                        $item.find('.displayed-value').show();
                        $item.find('#markad-cat-icon').show();
                        // Show modified category name.
                        $item.find('.displayed-value').text(value[0]);
                        $item.find('#markad-cat-icon').attr('class','markad-margin-right-sm fa '+ value[1]);
                        markadAlert({success: ['Successfully edited.']});
                    }else{
                        markadAlert({error: ['Problem in saving, Please try again.']});
                    }
                    $this.find('.confirm').removeClass('bookme-progress');
                }
            });
            return false;
        })

        .on('click', '#cancel-button', function(e) {
            e.stopPropagation();
            // Prevent navigating to '#'.
            e.preventDefault();
            var $item = $(this).closest('.markad-category-item');
            $item.find('form').hide();
            $item.find('.displayed-value').show();
            $item.find('#markad-cat-icon').show();
        })
        .on('click', '.iconpicker', function(e) {
            e.stopPropagation();
            // Prevent navigating to '#'.
            e.preventDefault();
        })
        // On press Enter save changes.
        .on('keypress', 'input', function (e) {
            var code = e.keyCode || e.which;
            if (code == 13) {
                $(this).blur();
            }
        })

        // On delete category click.
        .on('click', '.markad-js-delete', function(e) {
            // Keep category item click from being executed.
            e.stopPropagation();
            // Prevent navigating to '#'.
            e.preventDefault();
            // Ask user if he is sure.
            if (confirm('Are you sure?')) {
                $('.markad-js-delete').addClass('bookme-progress');
                var $item = $(this).closest('.markad-category-item');
                var data = { action: 'deleteCat', id: $item.data('category-id') };
                $.post(ajaxurl+'?action=deleteCat', data, function(response) {
                    // Remove category item from DOM.
                    $('.markad-js-delete').removeClass('bookme-progress');
                    $('.markad-js-all-services').trigger('click');
                    $item.remove();

                });
            }
        })

        .on('click', '.markad-cat-lang-edit', function(e) {
            // Keep category item click from being executed.
            e.stopPropagation();
            // Prevent navigating to '#'.
            e.preventDefault();

            $('#modal_LangTranslation #displayData').html('');
            $('#modal_LangTranslation').modal('show');
            $('#modal_LangTranslation .loader').show();
            var id = $(this).data('category-id'),
                type = $(this).data('category-type'),
                data = { action: 'langTranslation_FormFields', id: id, cat_type: type};

            $.post(ajaxurl+'?action=langTranslation_FormFields', data, function(response) {
                if(response != "") {
                    $('#modal_LangTranslation #displayData').html(response);
                    $('#modal_LangTranslation .loader').hide();
                }else{
                    markadAlert({error: ['Problem in saving, Please try again.']});
                }
            });
            return false;
        })

        .on('click', 'input', function(e) {
            e.stopPropagation();
    });

    // Services list delegated events.
    $('#markad-services-wrapper').on('click', '#markad-delete', function(e) {
        if (confirm('Are you sure?')) {
            $('#markad-delete').addClass('bookme-progress');
            var $for_delete = $('.service-checker:checked'),
                data = { action: 'delSubCat' },
                services = [],
                $panels = [];

            $for_delete.each(function(){
                var panel = $(this).parents('.markad-js-collapse');
                $panels.push(panel);
                services.push(this.value);
            });
            data['subCatids[]'] = services;
            $.post(ajaxurl+'?action=delSubCat', data, function(response) {
                if(response != 0) {
                    $.each($panels.reverse(), function (index) {
                        $(this).delay(500 * index).fadeOut(200, function () {
                            $(this).remove();
                        });
                    });
                    $('#markad-delete').removeClass('bookme-progress');
                    markadAlert({success: ['Successfully deleted.']});
                }else{
                    $('#markad-delete').removeClass('bookme-progress');
                    markadAlert({error: ['Problem in deleting, Please try again.']});
                }
            });
        }
    });


    var $category = $('#markad-category-item-list');
    $category.sortable({
        axis   : 'y',
        handle : '.markad-js-handle',
        update : function( event, ui ) {
            var data = [];
            $category.children('li').each(function() {
                var $this = $(this);
                var position = $this.data('category-id');
                data.push(position);
            });
            $.ajax({
                type : 'POST',
                url  : ajaxurl,
                data : { action: 'markad_update_maincat_position', position: data},
                success: function (response, textStatus, jqXHR) {
                    // Remove Ads item from DOM.
                    if(response != 0) {
                        markadAlert({success: ['Category Order Changed Successfully.']});
                    }else{
                        markadAlert({error: ['Problem in Reorder, Please try again.']});
                    }
                }
            });
        }
    });

    function makeSortable() {
        if ($('.markad-js-all-services').hasClass('active')) {
            var $services = $('#services_list'),
                fixHelper = function(e, ui) {
                    ui.children().each(function() {
                        $(this).width($(this).width());
                    });
                    return ui;
                };
            $services.sortable({
                helper : fixHelper,
                axis   : 'y',
                handle : '.markad-js-handle',
                update : function( event, ui ) {
                    var data = [];
                    $services.children('div').each(function() {
                        data.push($(this).data('service-id'));
                    });
                    $.ajax({
                        type : 'POST',
                        url  : ajaxurl,
                        data : { action: 'markad_update_subcat_position', position: data },
                        success: function (response, textStatus, jqXHR) {
                            // Remove Ads item from DOM.
                            if(response != 0) {
                                markadAlert({success: ['Sub-Category Order Changed Successfully.']});
                            }else{
                                markadAlert({error: ['Problem in Reorder, Please try again.']});
                            }
                        }
                    });
                }
            });
        } else {
            $('#services_list .markad-js-handle').hide();
        }
    }
    makeSortable();
});

$('#modal_LangTranslation').on('click', '#saveEditLanguage', function() {
    var $this = $(this),
        $item = $this.closest('#modal_LangTranslation'),
        id = $('#modal_LangTranslation #category_id').val(),
        type = $('#modal_LangTranslation #category_type').val();

    $selected = [];
    $item.find('.translate_row').each(function() {
        var $title = jQuery(this).find('input.cat_title').val(),
            $code = jQuery(this).find('input.lang_code').val(),
            $slug = jQuery(this).find('input.cat_slug').val();

        $selected.push({
            code: $code,
            title: $title,
            slug:  $slug
        });
    });
    $('#saveEditLanguage').addClass('bookme-progress');

    var data = { action: 'edit_langTranslation', id: id, cat_type: type, value: $selected };
    $.ajax({
        type: "POST",
        data: data,
        url: ajaxurl+'?action=edit_langTranslation',
        success: function(response){
            if(response != 0) {
                $('#modal_LangTranslation').modal('hide');
                markadAlert({success: ['Successfully edited.']});
            }else{
                markadAlert({error: ['Problem in saving, Please try again.']});
            }
            $('#saveEditLanguage').removeClass('bookme-progress');
        }
    });

    return false;
});
$('.iconpicker').on('change', function (e) {
    var $item = $(this).siblings('.categoryicon');
    $item.val(e.icon);
});
$(window).bind("load", function() {
    $('.markad-category-item:first').trigger('click');
});