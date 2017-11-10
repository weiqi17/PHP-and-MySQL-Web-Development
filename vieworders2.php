<?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

    $orders = file("$DOCUMENT_ROOT/../orders/orders.txt");

    $numbers_of_orders = count($orders);
    if ($numbers_of_orders == 0){
        echo "<p><strong>No orders pending.
                Please try again later.</strong></p>";
    }

    for ($i = 0; $i < $numbers_of_orders; $i++){
        echo $orders[$i]."<br />";
    }
?>