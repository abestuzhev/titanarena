$(function(){
	$('header .slider').slides({
		preload: true,
		preloadImage: 'images/loading.gif',
		play: /*false*/5000,
		pause: 2500,
		hoverPause: true
	});
});
$(function(){
	$('.services-left-col .slider').slides({
		preload: true,
		preloadImage: 'images/loading.gif',
		play: 5000,
		pause: 2500,
		hoverPause: true,
		generateNextPrev: false,
		generatePagination: true
	});
});
$(function(){
	$('.photo-footcourt .slider').slides({
		preload: true,
		preloadImage: 'images/loading.gif',
		play: 5000,
		pause: 2500,
		hoverPause: true
	});
});
$(function(){
	$('.imax-left .slider').slides({
		preload: true,
		preloadImage: 'images/loading.gif',
		play: 5000,
		pause: 2500,
		hoverPause: true,
		generateNextPrev: false,
		generatePagination: true
	});
});

$(document).ready(function() {

	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});

$(document).ready(function() {

	//Default Action
	$(".tab_content_news").hide(); //Hide all content
	$("ul.tabs_news li:first").addClass("active").show(); //Activate first tab
	$(".tab_content_news:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs_news li").click(function() {
		$("ul.tabs_news li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content_news").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});

$(document).ready(function() {

	//Default Action
	$(".tab_content_imax").hide(); //Hide all content
	$("ul.tabs_imax li:first").addClass("active").show(); //Activate first tab
	$(".tab_content_imax:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs_imax li").click(function() {
		$("ul.tabs_imax li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content_imax").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});

$(function() {

	$('.list-floor ol li').each(function(){
		$(this).prepend('<span>' + ($(this).index() + 1) + '</span>');
	});

});

(function($) {
	$(function() {
		$('.list-floor ol').autocolumnlist({
			columns: 2,
			classname: 'col'
		});
	})
})(jQuery)

$(function(){
	$('.brand-slider .slider').slides({
		preload: true,
		preloadImage: 'images/loading.gif',
		play: 5000,
		pause: 2500,
		hoverPause: true
	});
});

$(document).ready(function() {
	$("#count-div #count").first().removeAttr('id', '').addClass('col-brand');
	var count = 2;
    itemsWrapper(count);
    function itemsWrapper(count){
        $('#count-div #count').each(function(i){
            if((i == 0) || (i % count == 0)){
                id = i;
                $('#count-div').append('<div class="col-brand" id="page_'+i+'"></div>');
            }
            $(this).appendTo('#page_'+id); // пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ
        });
    }


	$(".date p").children().andSelf().contents().each(function(){
    if (this.nodeType == 3) {
        var $this = $(this);
        $this.replaceWith($this.text().replace(/(\w)/g, "<span>$&</span>"));
    }
	});

	$('.col-footcourt a').each(function(){
	var gethref = $(this).attr('href');
	if(gethref == ''){
		$(this).removeAttr('href');
	}
	});

	var getnest = $('.news-menu h1').attr('class');

	$('#type').find('.'+getnest).parent().remove();
});


$(document).ready(function() {

	tabby.init({
	    callback: function ( toggle, tabID ) {
	        switch (tabID) {
	            case '#tab1':
	                $('.tooltipster-content').hide();
	            break;
	            case '#tab2':
	                $('.tooltipster-content').hide();
	            break;
	            case '#tab3':
	                $('.tooltipster-content').hide();
	            break;
	            case '#tab4':
	                $('.tooltipster-content').hide();
	            break;
	        }
	    }
	});

	var tip = $('.tip').each(function(){

		var qtipText = '';

		if ($(this).data('thumb') && $(this).data('thumb').length > 0) {
			qtipText += '<img src="' + $(this).data('thumb') + '">';
		}
		qtipText += '<span class="tool-header">' + $(this).attr('original-title') + '</span>';
		qtipText += '<div style="clear: both;"></div>';
		if ($(this).data('newstitle') && $(this).data('newstitle').length > 0) {
			qtipText += '<a href="' + $(this).data('newslink') + '" class="tool-text">' + $(this).data('newstitle') + '</a>';
		}
		if ($(this).data('phone') && $(this).data('phone').length > 0) {
			qtipText += '<div class="tool-timeH">РўРµР»РµС„РѕРЅ</div>';
			qtipText += '<div class="tool-time">' + $(this).data('phone') + '</div>';
		}
		qtipText += '<div class="tool-close"></div>';

		$(this).qtip({
		    content: {
		        text: qtipText
		    },
		    style: {
		      classes: 'tooltipster-content',
		      def: false,
		    },
		    position: {
		      my: 'bottom center',
		      at: 'top center',
		    },
		    show: {
		        event: 'click',
		        solo: true,
		    },
		    hide: {
		        event: 'click',
		    },
		    events: {
		        show: function(event, api){
		            $('.tool-close').click(function(){
		                api.hide();
		            })
		        },
		        hide: function(event, api) {
		           var $elem = $('.tip');
		           for (var j=0; j<$elem.length; j++) {
		               var $reg = $elem.eq(j).attr('class').split(' ');
		                for (var i=0; i<$reg.length; i++) {
		                    switch ($reg[i]) {
		                        case 'st1':
		                        var elem = '.'+$reg[i];
		                           $(elem).css('fill','#9C5897');
		                        break;
		                        case 'st2':
		                        var elem = '.'+$reg[i];
		                           $(elem).css('fill','#069cd8');
		                        break;
		                        case 'st3':
		                        var elem = '.'+$reg[i];
		                           $(elem).css('fill','#b22e82');
		                        break;
		                        case 'st4':
		                        var elem = '.'+$reg[i];
		                           $(elem).css('fill','#ed8e23');
		                        break;
		                    }
		                }
		            }
		            $('.n-plan__values__cont').removeClass('n-plan__values__cont--active');
		        }
		    }
		});
	});

	$('.tip').tipsy({
	    gravity: 's',
	});

	$('.tip').click(function(){
	    var attr = $(this).attr('class');
	});

	$('.n-plan__values__header').click(function(){
	    if (!$(this).hasClass('active')) {
	        $(this).addClass('active');
	        $(this).next().show('slow',function(){
	            $(this).find('.n-plan__values__check').animate({'opacity':'1'})
	        });
	    } else {
	        $(this).removeClass('active');
	        $(this).next().find('.n-plan__values__check').animate({'opacity':'0'},function(){
	            $(this).parent().hide('slow');
	        });
	    }

	});

	$('.n-plan__values__ins').find('a').click(function(e){
	    e.preventDefault();
	    var attr = $(this).attr('href');
	    var $elem = $(attr);
	    var api = $elem.qtip('api');
	    api.show();
	    var reg = $elem.attr('class').split(' ');
	    for (var i=0; i<reg.length; i++) {
	        switch (reg[i]) {
	            case 'st1':
	               $elem.css('fill','#82427e');
	            break;
	            case 'st2':
	               $elem.css('fill','#037bab');
	            break;
	            case 'st3':
	               $elem.css('fill','#7f215d');
	            break;
	            case 'st4':
	               $elem.css('fill','#c5751c');
	            break;

	        }
	    }
	    $('.n-plan__values__cont').removeClass('n-plan__values__cont--active');
	    $(this).parent().find('.n-plan__values__cont').addClass('n-plan__values__cont--active');
	})

});
