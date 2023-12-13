<?php
$product_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
    if ($item['item_id'] == $product_id) :
        ?>
<!--Product-->
<section id="product" class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="<?php echo $item['item_image']?>" alt="product"
					class="img-fluid" />
				<form action="" class="form-row pt-4 font-size-16 d-flex">
					<div class="col">
						<button type="submit" class="btn btn-danger form-control">
							Proccess to buy</button>
					</div>
					<div class="col">
						<button type="submit" class="btn btn-warning form-control">Add to
							Cart</button>
					</div>
				</form>
			</div>
			<div class="col-sm-6 py-5">
				<h5><?php echo $item['item_name']??"Unknown" ?></h5>
				<small>By <?php echo $item['item_brand']??"Unknown" ?></small>
				<div class="d-flex">
					<div class="rating text-warning font-size-12">
						<span><i class="fas fa-star"></i></span> <span><i
							class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>
						<span><i class="fas fa-star"></i></span> <span><i
							class="far fa-star"></i></span>
					</div>
					<a href="#" class="font-size-12"> &nbsp; 201 rating| 1000+ answered
						questions</a>
				</div>
				<hr class="m-0" />

				<!--product price-->

				<table class="my-3">
					<tr class="font-rubik font-size-14">
						<td>M.R.P:</td>
						<td><strike>$<?php echo $item['item_price']??"Unknown" ?></strike></td>
					</tr>
					<tr class="font-rubik font-size-20">
						<td>Deal price:</td>
						<td class="font-size-20 text-danger">$ <span><?php echo $item['item_price'] - 10 ??"Unknown" ?></span>
							<small>inclusive of all taxes</small>
						</td>
					</tr>
					<tr class="font-rubik font-size-14">
						<td>You save:</td>
						<td class="text-danger">$ 10.00</td>
					</tr>
				</table>

				<!--Policy-->
				<div class="policy">
					<div class="d-flex justify-content-around">
						<div class="return text-center mr-5">
							<div class="font-size-20 my-2 color-second">
								<span class="fas fa-retweet border p-3 rounded-pill"></span>
							</div>
							<a href="" class="font-rubik font-size-12">10 Days <br />Replacement
							</a>
						</div>
						<div class="return text-center mr-5">
							<div class="font-size-20 my-2 color-second">
								<span class="fas fa-truck border p-3 rounded-pill"></span>
							</div>
							<a href="" class="font-rubik font-size-12">Daily Tuition<br />Delive
							</a>
						</div>
						<div class="return text-center mr-5">
							<div class="font-size-20 my-2 color-second">
								<span class="fas fa-check-double border p-3 rounded-pill"></span>
							</div>
							<a href="" class="font-rubik font-size-12">1 year <br />Warranty
							</a>
						</div>
					</div>
				</div>
				<hr />

				<!--Order Detail-->
				<div id="order-details"
					class="font-rale d-flex flex-column text-dark">
					<small>Delivery by: Mar 26 - Apr 1</small> <small>Sold by: <a
						href="">Shopee inCo</a> (4.9/5 | 1895 ratings)
					</small> <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;
						Delivery to Customer - 19425</small>
				</div>

				<div class="row">
					<div class="col-6">
						<!--color-->
						<div class="color my-3">
							<div class="d-flex justify-content-between">
								<h6 class="font-rubik">Color:</h6>
								<div class="py-2 color-yellow-bg rounded-circle">
									<button class="btn font-size-20 m-2"></button>
								</div>
								<div class="py-2 color-primary-bg rounded-circle">
									<button class="btn font-size-20 m-2"></button>
								</div>
								<div class="py-2 color-second-bg rounded-circle">
									<button class="btn font-size-20 m-2"></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<!--QTY-->
						<div class="qty d-flex">
							<h6 class="font-rubik">QTY:</h6>
							<div class="px-4 d-flex font-rale">
								<button class="qty-up border bg-light" data-id="pro1">
									<i class="fas fa-angle-up"></i>
								</button>
								<input data-id="pro1" type="text"
									class="qty_input border px-2 bg-light w-50" disabled value="1"
									placeholder="1" />
								<button class="qty-down border bg-light" data-id="pro1">
									<i class="fas fa-angle-down"></i>
								</button>
							</div>
						</div>
					</div>
				</div>

				<!--size product-->
				<div class="size my-3">
					<h6 class="font-rubik">Size:</h6>
					<div class="d-flex justify-content-between w-75">
						<div class="font-rubik border py-2">
							<button class="btn p-0 font-size-14">4GB RAM</button>
						</div>
						<div class="font-rubik border py-2">
							<button class="btn p-0 font-size-14">6GB RAM</button>
						</div>
						<div class="font-rubik border py-2">
							<button class="btn p-0 font-size-14">8GB RAM</button>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12">
				<h6 class="font-rubik">Product Description</h6>
				<hr />
				<p class="font-rale font-size-14">Lorem ipsum dolor sit amet
					consectetur adipisicing elit. Optio magni tempora sequi cupiditate.
					Itaque nam illum amet possimus deserunt tempore dolorum, provident,
					dolorem saepe id iusto in temporibus sint illo! Lorem ipsum dolor
					sit amet consectetur adipisicing elit. Odit sequi officiis
					assumenda voluptatum nemo porro, et suscipit commodi eius, iste
					neque! Eius ea sapiente in, ratione similique quos fugiat commodi.
				</p>
			</div>
		</div>
	</div>
</section>

<?php 
endif;

endforeach
;
?>