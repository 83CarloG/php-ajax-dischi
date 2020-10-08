<!-- Entry template -->
<script id="entry-template" type="text/x-handlebars-template">
	<li class="item__album">
		<img class="item__img" src="{{poster}}" alt="#">
		<h4 class="item__title">
			{{title}}
		</h4>
		<span class="item__author">
			{{author}}
		</span>
		<span class="item__year">
			{{year}}
		</span>
	</li>
</script>
<!-- No found Template -->
<script id="nofound-template" type="text/x-handlebars-template">
	<li>	<p class="item__author">{{testo}}</p></li>
</script>}}
