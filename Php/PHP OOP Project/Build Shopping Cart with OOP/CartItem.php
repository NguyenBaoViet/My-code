<?php
    class CartItem {
        private Product $product;
        private int $quantity;

        //TODO Generate constructor with all properties of the class
        //TODO Generate getters and setters of properties

        public function increaseQuantity() {
            //TODO $quantity must be increased by one.
            //Bonus: $quantity must not become more than whatever it Product::availableQuantity
        }

        public function decreaseQuantity() {
            //TODO $quantity must be decreased by one
            //Bonus: Quantity must not become less than 1
        }
    }
?>