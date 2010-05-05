window.highlight = function(url) {
	var hash = url.match(/#([^#]+)$/);
	if (hash) {
		$('a[name=' + hash[1] + ']').parent().effect('highlight', {}, 'slow')
	}
}

$(function() {
	var rel;

	$('a').live('click', function() {
		if (rel = $(this).attr('rel')) {
			top.window.location.href = rel;
			return false;
		}
	});

	highlight('#' + location.hash);
});
