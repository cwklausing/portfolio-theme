var slideIn = ($ => {
	var $home_hero = $('.home-hero');

	var _public = {};

	_public.init = () => {
		setTimeout(() => {
			$home_hero.addClass('slide-in');
		}, 300);
	};

	return _public;
})(jQuery);

export default slideIn;
