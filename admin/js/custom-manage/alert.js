function markadAlert(alert) {
    var types = {
        success : 'alert-success',
        error   : 'alert-danger'
    };

    // Check if there are messages in alert.
    var not_empty = false;
    for (var type in alert) {
        if (types.hasOwnProperty(type) && alert[type].length) {
            not_empty = true;
            break;
        }
    }

    if (not_empty) {
        var $container = jQuery('#markad-alert');
        if ($container.length == 0) {
            $container = jQuery('<div id="markad-alert" class="markad-alert"></div>').appendTo('#markad-tbs');
        }
        for (var type in alert) {
            var class_name;
            if (types.hasOwnProperty(type)) {
                class_name = types[type];
            } else {
                continue;
            }
            alert[type].forEach(function (message) {
                var $alert = jQuery('<div class="alert"><button type="button" class="close" data-dismiss="alert"></button></div>');
                $alert
                    .addClass(class_name)
                    .append('<b class="markad-margin-left-sm markad-vertical-middle">' + message + '</b>')
                    .appendTo($container);

                if (type == 'success') {
                    setTimeout(function() {
                        $alert.remove();
                    }, 5000);
                }
            });
        }
    }
}