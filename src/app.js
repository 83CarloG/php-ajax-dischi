const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function	() {
	callApi();
	showApi();
});
//  Render
function render (result)	{
	for (var i = 0; i < result.length; i++) {
		var source = $('#entry-template').html();
		var template = Handlebars.compile(source);
		var html = template(result[i]);
		$('.item__list').append(html);
	}
}
function renderNofound (result)	{
		reset();
		var source = $('#nofound-template').html();
		var template = Handlebars.compile(source);
		var context = {
			testo: 'Nesun album trovato..'
		};
		var html = template(context);
		$('.item__list').append(html);

}
//  Funzioni ajax
function callApi	()	{
	$.ajax({
		url: 'api/api.php',
		type: 'GET',
		success: function (data)	{
			render(data);
		},
		error: function (err)	{
			console.log('errore' + err);
		}
	});
}
function showApi ()	{
	$('.search').on('click', function	() {
		var tipo = $('.select-serch').val();
		var input = $('input').val();
		$.ajax({
			url: 'api/api_show.php',
			type: 'GET',
			data: {
				tipo: tipo,
				query: input
			},
			success: function (data)	{
				console.log(data);
				reset();
				if (data.length !== 0) {
					render(data);
				} else {
					renderNofound();
				}
			},
			error: function (err)	{
				console.log('errore' + err);
			}
		});
	});
}

// Mix
function reset ()	{
	$('.item__list').children('li').remove();
}
