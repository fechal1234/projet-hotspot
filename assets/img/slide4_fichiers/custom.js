jQuery.noConflict();
jQuery( document ).ready(function() {


	function thumbsize() {
		if(jQuery( window ).width() < 783){
			jQuery('#page').css('background','none');
		}

		if(jQuery('.ewthumb').length > 0){
			var perline = 1;
			var contentw = jQuery('#content').width();
			var rapport = 1.77;
			var thumbw = contentw;
			var thumbh = thumbw/rapport;
			var maxwidth = 700;
			var minwidth = 250;
			while (thumbw > 680) {
				perline++;
				var thumbw = contentw/perline;
				var thumbh = thumbw/rapport;
			}
			jQuery('.ewthumb').width(thumbw);
			jQuery('.ewthumb').height(thumbh);
		}

		if(jQuery('.ewthumbsingle').length > 0){
			jQuery('.ewthumbsingle').height(jQuery('.ewthumbsingle').width()/1.9);
			var toppos = (jQuery('.ewthumbsingle').height()/2)-24;
			jQuery('.ewthumbsingle a').css('top',toppos+'px');
			jQuery('.ewrelated a').height(jQuery('.ewrelated a').width()/1.77);
		}

	}
	thumbsize();
	jQuery( window ).resize(function() {
		thumbsize();
	});


	function highlight() {
		if(jQuery('.ewdownload').length > 0){
			var myscreens = new Array( screen.width+"x"+screen.height, screen.width*2+"x"+screen.height );
			jQuery(".ewdownload a").each(function(index, value) {
	    		if(jQuery.inArray(jQuery(this).text(),myscreens) >= 0){
	    			jQuery(this).addClass('actived');
	    			jQuery('.ewdownload .yourscreen').css('display','block');
	    			jQuery(this).clone().appendTo('.ewdownload .yourscreen .ewright');
	    		}
			});
		}

	}
	highlight();

	function fixContent() {
		if(jQuery('.ewthumb').length > 0){
			if(jQuery( window ).width() > 799){
				var contenth = jQuery('#content').height();
				var mainh = jQuery('#page').height();
				if(contenth < mainh){
					if (jQuery(window).scrollTop() + jQuery( window ).height() > contenth + 80){
						//if(jQuery(window).scrollTop() + jQuery( window ).height() <= mainh){
							var margindiff = jQuery(window).scrollTop() + jQuery( window ).height() - contenth - 80;
							jQuery('#content').css({'margin-top': margindiff});
						//}
					}
					else{
						jQuery('#content').css({'margin-top': 0});
					}
				}else{
					jQuery('#content').css({'margin-top': 0});
				}
			}
		}
	}
	fixContent();
	jQuery(window).scroll(fixContent);

	var cleana = true;
	jQuery('.ew-list-widget .list-custom-taxonomy-widget > ul > li').click(function() {
		if(cleana){
			if(jQuery(this).hasClass("ew-widget-selected")){
				jQuery(this).removeClass("ew-widget-selected");
				jQuery(this).find('.children').slideUp('fast');
			}else{
				jQuery(this).addClass("ew-widget-selected");
				jQuery(this).find('.children').slideDown('fast');
			}
		}
		cleana = true;
	});
	jQuery('.ew-list-widget .list-custom-taxonomy-widget a').click(function() {
		cleana = false;
	});

});