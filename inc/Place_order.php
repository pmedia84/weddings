<?php
session_start();
//save order in the db and send admins an order confirmation

if (isset($_SESSION['cart'], $_SESSION['client'])) {

  $order = new Order;
  $order->New_order();
}