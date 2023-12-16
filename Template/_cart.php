<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete_cart_submit'])) {
        $deleterecord = $cart->deleteCartItem($_POST['item_id']);
    }
}
?>
<!--Shopping Cart-->
<section id="cart" class="py-3">
	<div class="container-fluid w-75">
		<h5 class="font-rubik font-size-20">Shopping cart</h5>

		<!--cart items-->
		<div class="row">
			<div class="col-sm-9">
			<?php
foreach ($product->getData('cart') as $item) :
    $result = $product->getProduct($item['item_id']);
    // print_r($result);
    $subTotal[] = array_map(function ($item1) {
        ?>
				<!--item-->
				<div class="row border-top py-3 mt-3">
					<div class="col-sm-2">
						<img src="<?php echo $item1['item_image']?>" alt="cart1"
							class="img-fluid" style="height: 120px;" />
					</div>
					<div class="col-sm-8">
						<h5 class="font-rubik font-size-20"><?php echo $item1['item_name']?></h5>
						<small>by <?php echo $item1['item_brand']?></small>

						<!--rating-->
						<div class="d-flex">
							<div class="rating text-warning font-size-12">
								<span><i class="fas fa-star"></i></span> <span><i
									class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>
								<span><i class="fas fa-star"></i></span> <span><i
									class="far fa-star"></i></span>
							</div>
							<a href="#" class="px-2 font-rubik font-size-14">20.542 ratings</a>
						</div>

						<!--qty-->
						<div class="qty d-flex pt-2">
							<div class="d-flex font-rubik w-25">
								<button class="qty-up border bg-light"
									data-id="<?php echo $item1['item_id']?? 'O'?>">
									<i class="fas fa-angle-up"></i>
								</button>
								<input data-id="<?php echo $item1['item_id']?? 'O'?>"
									type="text" class="qty_input border px-2 bg-light w-100"
									disabled value="1" placeholder="1" />
								<button class="qty-down border bg-light"
									data-id="<?php echo $item1['item_id']?? 'O'?>">
									<i class="fas fa-angle-down"></i>
								</button>
							</div>
							<form method="post">
								<input type="hidden" name="item_id"
									value="<?php echo $item1['item_id']?>">
								<button type="submit" name="delete_cart_submit"
									class="btn font-baloo text-danger px-3 border-right">Delete</button>
							</form>
							<button type="submit" class="btn font-baloo text-danger">Save for
								Later</button>
						</div>
					</div>

					<div class="col-sm-2 text-right">
						<div class="font-size-20 text-danger font-baloo">
							$ <span class="product_price"
								data-id="<?php echo $item1['item_id']?? 'O'?>"><?php echo $item1['item_price']?></span>
						</div>
					</div>
				</div>
				<?php
        return $item1['item_price'];
    }, $result);
endforeach
;
?>
			</div>

			<!--subtotal-->
			<div class="col-sm-3">
				<div class="sub-total border text-center mt-2">
					<h6 class="font-size-12 font-rale text-success py-3">
						<i class="fas fa-check"> &nbsp;</i>Your orrder is eligible for
						Free Delivery
					</h6>
					<div class="border-top py-4">
						<h5 class="font-rubik font-size-20">
							Subtotal (<?php echo isset($subTotal) ? count($subTotal) : 0?> items): &nbsp; <span
								class="text-danger" id="deal-price">$<?php echo isset($subTotal)?$cart->getSum($subTotal) : 0?></span>
						</h5>
						<button type="submit" class="btn btn-warning">Proceed to Buy</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>