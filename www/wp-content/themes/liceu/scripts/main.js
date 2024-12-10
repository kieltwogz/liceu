jQuery.expr[':'].external = function(obj){
	return !obj.href.match(/^mailto\:/)
		   && (obj.hostname != location.hostname)
		   && !obj.href.match(/^javascript\:/)
		   && !obj.href.match(/^$/)
};

jQuery(document).ready(function(){
	var mySwiper = new Swiper('.swiper-container', { autoplay: 5000 });
	jQuery('a:external').attr('target', '_blank');


	var selector = 'input[type="tel"]';
	jQuery(selector).mask("(99) 9999-9999?9").ready(function(event) {
		var target, phone, element;
		target = (event.currentTarget) ? event.currentTarget : event.srcElement;
		if (typeof(target) != "undefined") {
			phone = target.value.replace(/\D/g, '');
		}
		element = jQuery(target);
		element.unmask();
		if (typeof(phone) != "undefined") {
			if(phone.length > 10) {
				element.mask("(99) 99999-999?9");
			} else {
				element.mask("(99) 9999-9999?9");
			}
		}
	});

	jQuery(selector).focusout(function(){
		var phone, element;
		element = jQuery(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
			element.mask("(99) 99999-999?9");
		} else {
			element.mask("(99) 9999-9999?9");
		}
	}).trigger('focusout');


	//jQuery("#nav-mobile").html($("#menu-principal").html());
	jQuery("#nav-trigger span").click(function () {
		if (jQuery("nav#nav-mobile ul").hasClass("expanded")) {
			jQuery("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
			jQuery(this).removeClass("open");
		} else {
			jQuery("nav#nav-mobile ul").addClass("expanded").slideDown(250);
			jQuery(this).addClass("open");
		}
	});
});

