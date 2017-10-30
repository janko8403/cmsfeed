$(document).ready(function() {
	$('#carousel-example-generic').carousel({
		pause: false,
		interval: 1000,
	});
	$('#table-carousel').carousel({
		pause: false,
		interval: 0,
	});
	$(".single-item").slick({
	    dots: true
	});
});


$('select.select-tabs').on('change', function () {
    $(':selected', this).tab('show');
});
