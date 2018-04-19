<?php
 include("cart.php");

  ?>		
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- header dropdown buttons -->
												<div class="header-dropdown-buttons hidden-xs ">
										
													<div class="btn-group dropdown">
														<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-basket-1"></i><span class="cart-count default-bg"><?php 
																	if (isset($items)) {
																		$totalQ=0;
										
																			
																					for ($i=0; $i <count($items) ; $i++) { 
																					$totalQ = $items[$i]["unitsInCart"] + $totalQ;

																					}
																					echo $totalQ;
																	}
																?></span></button>
														<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
															<li>
																<table class="table table-hover">
																	<thead>
																		<tr>
																			<th class="quantity">QTY</th>
																			<th class="product">Product</th>
																			<th class="amount">Subtotal</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php 
																		$totalBill =0;
																	
																		if (isset($items)) {
																			for ($i=0; $i <count($items) ; $i++) { 
																						$total =0;

																			for ($x=0; $x <$items[$i]["unitsInCart"] ; $x++) { 
																					$total = $items[$i]["subtotal"] +$total;
																														}
																							$totalBill = $total + $totalBill;

																				echo "<tr>";
																				echo '<td class="quantity">'.$items[$i]["unitsInCart"].'</td>';
																				echo '<td class="product"><a href="shop-product.php?item='.$items[$i]["productID"].'">'.$items[$i]["productName"].'</a><span class="small">'.$items[$i]["size"].'</span></td>';
																				echo '<td class="amount">$'.$total.'.00</td>';
																				echo "</tr>";
																			}
																		}
																												$totalQ=0;
										
																			
																					for ($i=0; $i <count($items) ; $i++) { 
																					$totalQ = $items[$i]["unitsInCart"] + $totalQ;

																					}
																				
	
																echo '	<tr>
																			<td class="total-quantity" colspan="2">Total '.$totalQ.' Items</td>
																			<td class="total-amount">$'.$totalBill.'.00</td>
																		</tr>';


																		?>
																		
																	
																	</tbody>
																</table>
																<div class="panel-body text-right">
																	<a href="shop-cart.php" class="btn btn-group btn-gray btn-sm">View Cart</a>
														<a href="shop-checkout-completed.php" class="btn btn-group btn-gray btn-sm">Checkout</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<!-- header dropdown buttons end-->
</body>
</html>