$(window).load(function() {
	$("#totop").click(function () {
		$("body, html").animate({
			scrollTop: 0
		}, 300);
		return false;
	});
});