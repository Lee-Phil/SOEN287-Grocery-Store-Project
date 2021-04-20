<?php
    class Person{
        private $userName;
        private $displayName;
        private $address;
        private $email;
        private $orderHistory;

        function __construct($userName,$displayName,$email,$address){
            $this->userName = $userName;
            $this->displayName = $displayName;
            $this->address = $address;
            $this->email = $email;
            $this->orderHistory = array();
        }

        function setUserName($userName){
            $this->userName = $userName;
        }

        function getUserName(){
            return $this->userName;
        }

        function setDisplayName($displayName){
            $this->displayName = $displayName;
        }

        function getDisplayName(){
            return $this->displayName;
        }

        function setAddress($address){
            $this->address = $address;
        }

        function getAddress(){
            return $this->address;
        }

        function setEmail($email){
            $this->email = $email;
        }

        function getEmail(){
            return $this->email;
        }

        function addToAllOrders($productsInOrder){
            $orderID = 0;
            //Generate a random Order ID following the format #####LL where # is a number and L is a letter
            do{
            $orderID = rand(10000,99999).chr(rand(65,90)).chr(rand(65,90));

            //While loop, loops till an order ID that is not used is found
            }while($this->checkOrderHistoryWithID($orderID));

            //Add to users orderHistory
            $this->orderHistory[$orderID] = $productsInOrder;
        }

        function getAllOrders(){
            return $this->orderHistory;
        }

        function checkOrderHistoryWithID($orderID){
            return array_key_exists($orderID,$this->orderHistory);
        }


    }

?>