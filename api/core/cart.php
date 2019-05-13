<?php

include 'db.php';

class Cart extends db{
    public function __construct($id,$cart_id=null,$user_token=null,$qunatity=1) {
        $this->product_id=$id;
        $this->cart_id=$cart_id;
        $this->user=$user_token;
        $this->quantity=$qunatity;


    }

    public function addCartNoUserNoCart(){

        echo json_encode(['product_id'=>$this->product_id,
        'status'=>'success',
        'data'=>[''],
        'code' => 200]);
    }


    
}