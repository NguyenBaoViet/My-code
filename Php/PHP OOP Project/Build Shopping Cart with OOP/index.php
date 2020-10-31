<?php
    include "Product.php";
    include "Cart.php";
    include "CartItem.php";

    $product1 = new Product(1, "iPhone 12", 2500, 10);
    $product2 = new Product(2, "M2 SSD", 400, 10);
    $product3 = new Product(3, "Samsung Galaxy S20", 3200, 10);
    $cart = new Cart();
    $cartItem1 = $cart->addProduct($product1, 1);
    $cartItem2 = $product2->addToCart($cart,1);
    echo "Number of items in cart: ";
    echo $cart->getTotalQuantity();// This must print 2
//     echo "Total price of items in cart: ";
//     echo $cart->getTotalSum(); // This must print 2900

    $cartItem2->increaseQuantity();
    $cartItem2->increaseQuantity();
   
   echo "<br>Number of items in cart: ";
   echo $cart->getTotalQuantity(); //This must print 4
   
//    echo "Total price of items in cart: ";
//    echo $cart->getTotalSum(); //This must privt 3700
?>