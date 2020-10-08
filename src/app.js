const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function	() {

	$('.search').click(function	() {
		var artista = $('input').val();
		$.ajax({
			url: 'api/api_show.php',
			type: 'GET',
			data: {
				query: artista
			},
			success: function (data)	{
				$('.item__list').children('li').remove();
				render(data);
			},
			error: function (err)	{
				alert('errore' + err);
			}
		});
	});
	callApi();
});

function render (result)	{
	for (var i = 0; i < result.length; i++) {
		var source = $('#entry-template').html();
		var template = Handlebars.compile(source);

		var html = template(result[i]);
		$('.item__list').append(html);
	}
}
function callApi	()	{
	$.ajax({
		url: 'api/api.php',
		type: 'GET',
		success: function (data)	{
			render(data);
		},
		error: function (err)	{
			alert('errore' + err);
		}
	});
}
