<?php
 
$order_total = $shop['Order']['total'];

$item_number = $shop['Order']['quantity'];
$order_id    = $this->Session->read('Shop.Order.order_id'); 

$item_name   = $company_name." Online Shop Order - ".$order_id;
	
$billing_name     =	 $shop['Order']['first_name'].' '.$shop['Order']['last_name'];
$billing_address  =	 $shop['Order']['billing_address'].','.$shop['Order']['billing_address2'];
$billing_zip      =	 $shop['Order']['billing_zip'];
$billing_city     =	 $shop['Order']['billing_city'];
$billing_state    =	 $shop['Order']['billing_state'];
$billing_country  =	 $shop['Order']['billing_country'];
$billing_tel      =	 $shop['Order']['phone'];
$billing_email    =	 $shop['Order']['email'];
$delivery_name    =	 $shop['Order']['shipping_first_name'].' '.$shop['Order']['shipping_last_name'];
$delivery_address =	 $shop['Order']['shipping_address'].','.$shop['Order']['shipping_address2'];
$delivery_zip     =	 $shop['Order']['shipping_zip'];
$delivery_city    =	 $shop['Order']['shipping_city'];
$delivery_state   =	 $shop['Order']['shipping_state'];
$delivery_country =	 $shop['Order']['shipping_country'];
$delivery_tel     =	 $shop['Order']['shipping_phone'];

?>		
			
   Please wait. You will now be redirected to CCAvennue Gateway to complete the Payment. 
	
	<form id="paypalpayment" method="post" name="customerData" action="<?php echo Router::url('/', true);?>shop/payment">

	<input type="hidden" id="billName" name="billing_name" value="<?php echo $billing_name;?>">    

	<input type="hidden" id="billAddress" name="billing_address" value="<?php echo $billing_address;?>">

	<input type="hidden" id="billZip" name="billing_zip" value="<?php echo $billing_zip;?>">

	<input type="hidden" id="billCity" name="billing_city" value="<?php echo $billing_city;?>">

	<input type="hidden" id="billState" name="billing_state" value="<?php echo $billing_state;?>">

	<input type="hidden" id="billCountry" name="billing_country" value="<?php echo $billing_country;?>">

	<input type="hidden" id="billTel" name="billing_tel" value="<?php echo $billing_tel;?>">

	<input type="hidden" id="billEmail" name="billing_email" value="<?php echo $billing_email;?>">	
		
	<input type="hidden" id="delivery_name" name="delivery_name" value="<?php echo $delivery_name;?>">    

	<input type="hidden" id="delivery_address" name="delivery_address" value="<?php echo $delivery_address;?>">

	<input type="hidden" id="delivery_zip" name="delivery_zip"  value="<?php echo $delivery_zip;?>">

	<input type="hidden" id="delivery_city" name="delivery_city" value="<?php echo $delivery_city;?>">

	<input type="hidden" id="delivery_state" name="delivery_state" value="<?php echo $delivery_state;?>">

	<input type="hidden" id="delivery_country" name="delivery_country" value="<?php echo $delivery_country;?>">

	<input type="hidden" id="delivery_tel" name="delivery_tel" value="<?php echo $delivery_tel;?>">

	<input type="hidden" id="merchant_param1" name="merchant_param1" value="<?php echo $item_name;?>">

	<input type="hidden" id="amount" name="amount" readonly value="<?php echo $order_total;?>">

	<input type="hidden" name="tid" id="tid" readonly />
	<input type="hidden" name="merchant_id" value="188746"/>
	<input type="hidden" name="order_id" value="<?php echo $order_id;?>"/>

	<input type="hidden" name="currency" id="currency" value="INR"/>
	<input type="hidden" name="redirect_url" value="<?php echo Router::url('/', true);?>shop/payment"/>
	<input type="hidden" name="cancel_url" value="<?php echo Router::url('/', true);?>shop/success"/>
	<input type="hidden" name="language" value="EN"/>
				
   
    </form> 
    </div>
</div>
 
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>

<script type="text/javascript"> 

  $("#paypalpayment").submit();

</script>