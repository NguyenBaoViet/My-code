<?php
    class Cart {
        /**
         * @var CartItem[]
         */
        private $items = array();

        // TODO Generate getters and setters of properties

        /**
         * Add Product $product into cart. If product already exists inside cart
         * it must update quantity.
         * This must create CartItem and return CartItem from method
         * Bonus: $quantity must not become more than whatever
         * is $availableQuantity of the Product
         * 
         * @param Product $product
         * @param int $quantity
         * @return CartItem
         */
        public function addProduct(Product $product,int $quantity) {
            //TODO Implement method
            // find product in cart
            $cartItem = $this->findCartItem($product->getID());
            if ($cartItem === null) {
                $cartItem = new CartItem($product,0);
                $this->items[] = $cartItem;
            }
            $cartItem->increaseQuantity($quantity);
            return $cartItem;
        }

        private function findCartItem(int $productId) {
            foreach ($this->items as $item ) {
                if ($item->getProduct()->getID() === $productId) {
                    return $item->getProduct;
                }
            }
            return null;
        }
        /**
         * Remove product from cart
         * 
         * @param Product $product
         */
        public function removeProduct(Product $product) {
            //TODO Implement method
        }
        
        /**
         * This returns total number of products added in cart
         * 
         * @return int
         */
        public function getTotalQuantity() {
            //TODO implement method
            $sum = 0;
            foreach ($this->items as $item) {
                $sum += $item->getQuantity();
            }
            return $sum;
        }

        /**
         * This return total price of products added in cart
         * 
         * @return float
         */
        public function getTotalSum() {
            //TODO implement method
        }
    }
?>