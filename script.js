$(document).ready(function(){
	// $('a[href="' + document.URL.replace("http://darcu.net","") + '"]').addClass('active');

	// var margi = function() {
	// 	var wid = parseInt($(window).width());
	// 	wid = wid/10;
	// 	console.log(wid);
	// 	if (wid > 100)
	// 		$('#mainwrap').css('margin-left', wid);
	// 	else
	// 		$('#mainwrap').css('margin-left', 0);
	// }
	// margi();
	// $(window).resize(function(){
	// 	margi();
	// });

	
		$('.tile').hover(function(){
			if($(window).width() > 983){
				var mata = $(this).offset();
				var top = $(window).scrollTop();
				$(".tooltip", this).css({ "top": mata.top - top + 20 });
			}
		});
	

	var adjustWidth = function() {
		var win  = $(window).width();
		var doc  = $(document).width();
		var bod  = $(document.body).width();
		var wra  = $('#tilewrap').width();

		console.log("w " + win + " d " + doc + " b " + bod + " wr " + wra);

		var adjWidth = win - 430; //330 + padding + margin
		// console.log(win + ' ' + (win - 490));
		if(win > 983) {
			if(adjWidth >= 1056) {
				$('html').css("min-width", "1546");
				$('#tilewrap').width(1056);
			}
			else if(adjWidth >= 792) {
				$('html').css("min-width", "1282");
				$('#tilewrap').width(792);
			}
			else {
				$('html').css("min-width", "1018");
				$('#tilewrap').width(528);
			}
		}
		else {
			$('#tilewrap').removeAttr("style");
		}

	}

	adjustWidth();
	$(window).resize(function(){
		adjustWidth();
	});
});