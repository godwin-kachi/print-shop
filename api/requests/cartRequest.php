<?php

include '../core/cart.php';
$id = $_GET['id'];
$qunatity = $_GET['quantity'];
$user_token= $_GET['token'] ? $_GET['token'] : null;
$cart_id = $_GET['cart_id'] ? $_GET['cart_id']: null;

$cart = new Cart($id,$cart_id,$user_token,$qunatity);

// logged in but no cart

//logged in with a cart

//cart not logged in

//no cart no user
if($cart_id == null && $user_token == null){
    
    $cart->addCartNoUserNoCart();
}

