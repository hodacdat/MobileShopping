$(document).ready(function() {
	//banner carousel

	$("#banner-area .owl-carousel").owlCarousel({
		dots: true,
		items: 1,
	});

	//topsale carousel

	$("#top-sale .owl-carousel").owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 3,
			},
			1000: {
				items: 5,
			},
		},
	});

	//isotope filter
	var $grid = $(".grid").isotope({
		itemSelector: ".grid-item",
		layoutMode: "fitRows",
	});

	//filter item on button click
	$(".button-group").on("click", "button", function() {
		var filterValue = $(this).attr("data-filter");
		$grid.isotope({ filter: filterValue });
	});

	//new-phones carousel

	$("#new-phones .owl-carousel").owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 3,
			},
			1000: {
				items: 5,
			},
		},
	});

	//blog owl carousel
	$("#blogs .owl-carousel").owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 3,
			},
		},
	});

	//product qty
	let $qty_up = $(".qty .qty-up");
	let $qty_down = $(".qty .qty-down");
	// let $input = $(".qty .qty_input");


	//click on qty-up button
	$qty_up.click(function(e) {
		window.alert("clicked");
		let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
		let $price = $(`.product_price[data-id='${$(this).data("id")}']`);
		//change price by using ajax
		$.ajax({
			uri: "Template/ajax.php", type: 'post', data: { itemid: $(this).data("id") }, success: function(result) {
				Console.log('abc');
				console.log(result);
				let obj = JSON.parse(result);
				let item_price = obj[0]['item_price'];



				if ($input.val() >= 1 && $input.val() <= 9) {
					$input.val(function(i, oldval) {
						return ++oldval;
					});
				}

				//increase item price
				$price.text(parseInt(item_price * $input.val()).toFixed(2));


			}
		}) //close ajax


	});
	//click on qty-down button
	$qty_down.click(function(e) {
		window.alert("Clicked");
		console.log("clicked");
		let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
		if ($input.val() > 1 && $input.val() <= 10) {
			$input.val(function(i, oldval) {
				return --oldval;
			});
		}
	});
});
