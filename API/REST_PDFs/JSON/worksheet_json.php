
<?php
    include 'testData.php';
    $jsonArr = array(
            'customer' => $header['customer'],
            'job' => $header['job'],
            'partDesc' => $header['part_desc'],
            'partNum' => $header['part_no'],
            'poNum' => $header['po_number'],
            'tubeHeatNum' => $header['tube_heat_number'],
            'ringHeatNum' => $header['ring_heat_number'],
            'quantity' => $header['quantity'],
            'containerType' => $header['container_type'],
            'shippingMethod' => $header['shipping_method'],
            'shipDate' => $header['ship_date'],
            'lineItem' => $header['line_item'],
            'worksheet' => $footer['worksheet'],
            'worksheet2' => $footer['worksheet-2'],
            'worksheet3' => $footer['worksheet-3'],
            'worksheet4' => $footer['worksheet-4']
    );

    
?>