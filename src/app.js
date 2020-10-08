const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function	() {
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
});

function render (result)	{
	for (var i = 0; i < result.length; i++) {
		var source = $('#entry-template').html();
		var template = Handlebars.compile(source);

		var html = template(result[i]);
		$('.item__list').append(html);
	}
}
