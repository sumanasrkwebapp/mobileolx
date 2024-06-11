/*
Document: app-custom.js

Description: Write your custom code here
*/

// Below is an example of function and its initialization
var AppCustom = function() {
	var showAppName = function() {
		//console.log( 'markad Classified - Admin & Frontend template' );
	};
    var addAppCredit = function() {
    	var admin_login_card = jQuery('#admin_login_card'),
		admincredit_template = '<div class="text-center"><small>Design Credit : <a href="#" target="_blank"></a></small></div>';
        admin_login_card.after(admincredit_template);
    };
	return {
		init: function() {
			showAppName();
            addAppCredit();
		}
	}
}();

// Initialize AppCustom when page loads
jQuery( function() {
	AppCustom.init();
});
