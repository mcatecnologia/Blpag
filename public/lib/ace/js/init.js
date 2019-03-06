try{
    ace.settings.loadState('main-container')
} catch(e) {

}

try{
    ace.settings.loadState('sidebar')
} catch(e) {

}

if('ontouchstart' in document.documentElement) document.write("<script src='res_admin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");

$('a[data-toggle="tab"]').click(function(e) {
    $('.tab-content .tab-pane').removeClass('active');
    $('#' + $(this).attr('data-target')).addClass('active');
});

$('.easy-pie-chart.percentage').each(function(){
    $(this).easyPieChart({
        barColor: $(this).data('color'),
        trackColor: '#EEEEEE',
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 8,
        animate: ace.vars['old_ie'] ? false : 1000,
        size:75
    }).css('color', $(this).data('color'));
});

$('.vanish').fadeOut(6000);

$(document).on('click', '#search-debtor', function(e) {
	e.preventDefault();
	
	var action = $(this).data('url');
	var data = {
		"search" : $('#' + $(this).data('input')).val()
	}
	Html.Post(action, data, function(result) {
			Main.processResult(result, action, true);
		}
	);

});

$(document).on('click', '.alert-close', function(e) {
    e.preventDefault();
    $(this).closest('.gritter-item').remove();
});