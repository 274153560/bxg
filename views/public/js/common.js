
	NProgress.start();

	NProgress.done();

	$('.navs ul').prev('a').on('click', function () {
		$(this).next().slideToggle();
	});
	if(!$.cookie("PHPSESSID")&& location.pathname!="/login" ) {
		location.href="/login";
	};