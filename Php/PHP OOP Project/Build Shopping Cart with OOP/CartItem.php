<?php
    class CartItem {
        private $product;
        private $quantity;

        //TODO Generate constructor with all properties of the class
        //TODO Generate getters and setters of properties
        public function __construct(Product $product, int $quantity) {
            $this->product = $product;
            $this->quantity = $quantity;
        }

        public function getProduct() {
            return $this->product;
        }

        public function setProduct($product) {
            return $this->product = $product;
        }

        public function getQuantity() {
            return $this->quantity;
        }

        public function setQuantity($quantity) {
            return $this->quantity = $quantity;
        }
        

        public function increaseQuantity($amount = 1) {
            //TODO $quantity must be increased by one.
            //Bonus: $quantity must not become more than whatever it Product::availableQuantity
            if ($this->getQuantity() + $amount > $this->getProduct()->getavailableQuantity()) {
                throw new Exception("Product quantity can not be more than ".$this->getProduct()->getavailableQuantity());
            }
            $this->quantity += $amount;
           
        }

        public function decreaseQuantity($amount) {
            //TODO $quantity must be decreased by one
            //Bonus: Quantity must not become less than 1
            if ($this->getQuantity() - $amount < 1) {
                throw new Exception("Product quantity can not be less than 1.");
            }
            $this->quantity -= $amount;
        }
    }
?>