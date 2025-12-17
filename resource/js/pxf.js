/**
 * @author      C.Pergande
 * @package     phpXFace\resource\js
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
var pxf = function( options, fn ){
	this.callbackFnk = fn;
	this.options     = $.extend( {}, this.defaults, options );
};

pxf.prototype = {

	defaults: {

	},

	notification: function(option, callbackFnk){
		var icon = $('<span/>');
		var text = $('<span/>');
		var alert = $('<div/>');
		text.addClass('pxf-text');
		text.text(option.message);
		alert.addClass('alert pxf-alert pxf-alert-notification');
		alert.css({position: 'fixed', top: '70px', right: '20px', 'z-index': '99999'});

		if(option.type === 'success'){
			icon.addClass('pxf-icon glyphicon glyphicon-ok');
			alert.addClass('pxf-alert-success');
			setTimeout(function(){
				alert.fadeOut(300, function() {
					$(this).remove();
				});
			}, 2000);
		}else if(option.type === 'error'){
			icon.addClass('pxf-icon glyphicon glyphicon-warning-sign');
			alert.addClass('pxf-alert-danger');
			var dismissButton = $('<button/>');
			dismissButton.addClass('close');
			dismissButton.attr('data-dismiss', 'alert');
			dismissButton.css({'margin-left': '10px'});
			dismissButton.html('<span aria-hidden="true">&times;</span>');
			alert.append(dismissButton);
		}

		alert.append(icon);
		alert.append(text);

		$('body').append(alert);
	},

	responsiveLeftSideBarToggle: function(){
		if( $(".pxf-borderpane-left" ).hasClass( 'show' ) ){
			$( ".pxf-borderpane-left, .pxf-borderpane-layer, .pxf-responsive-menu #responsiveSideBar, .pxf-borderpane-center_l" ).removeClass( 'show' );
		}else {
			$( ".pxf-borderpane-left, .pxf-borderpane-layer, .pxf-responsive-menu #responsiveSideBar, .pxf-borderpane-center_l" ).addClass( 'show' );
		}
	},

	responsiveRightSideBarToggle: function(){
		if( $(".pxf-borderpane-right" ).hasClass( 'show' ) ){
			$( ".pxf-borderpane-right, .pxf-borderpane-layer" ).removeClass( 'show' );
		}else {
			$( ".pxf-borderpane-right, .pxf-borderpane-layer" ).addClass( 'show' );
		}
	}
};

$.extend({
	pxf: function(){
		var arg         = arguments[0] || {};
		var callbackFnk = arguments[1] || {};
		var object      = new pxf( arg, callbackFnk );
		return object;
	}
});

$(document).on("click", "#responsiveSideBar", function() {
	$.pxf().responsiveLeftSideBarToggle();
});
