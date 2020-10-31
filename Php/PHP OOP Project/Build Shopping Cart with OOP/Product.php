<?php
    class Product {
        private $id;
        private $title;
        private $price;
        private $availableQuantity;

        // TODO Generate constructor with all properties of the class
        public function __construct($id, $title, $price, $availableQuantity) {
            $this->id = $id;
            $this->title = $title;
            $this->price = $price;
            $this->availableQuantity = $availableQuantity;
        }

        // TODO Generate getters and setters of properties
        //id
        public function getID() {
            return $this->id;
        }
        public function setID($id) {
            return $this->id = $id;
        }

        //title
        public function getTitle() {
            return $this->title;
        }
        public function setTitle($title) {
            return $this->title = $title;
        }

        //price
        public function getPrice() {
            return $this->price;
        }
        public function setPrice($price) {
            return $this->price = $price;
        }

        //availableQuantity
        public function getAvailableQuantity() {
            return $this->availableQuantity;
        }
        public function setAvailableQuantity($availableQuantity) {
            return $this->availableQuantity = $availableQuantity;
        }
        /**
         * Add Product $product into cart. If product already exists inside cart
         * it must update quantity.
         * This must create CartItem and return CartItem from method
         * Bonus: $quantity must not become more than whatever
         * is $availableQuantity of the Product
         * 
         * @param Cart $cart
         * @param int $quantity
         * @return void
         * @return CartItem
         */

        public function addToCart(Cart $cart, int $quantity) {
            //TODO implement method
            return $cart->addProduct($this, $quantity);
        }

        /**
         * Remove product from cartItem
         * 
         * @param Cart $cart
         */
        public function removeFromCart(Cart $cart) {
            //TODO Implement method
        }
    }


?>