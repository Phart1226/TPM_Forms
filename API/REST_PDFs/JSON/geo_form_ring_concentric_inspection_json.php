<?php
    if(isset($_GET['from']) && !empty($_GET['from']))
        $from = $_GET['from'];
    else
        $from = 1;
    if(isset($_GET['to']))
        $too = $_GET['to'];
    else
        $too = 20;
    $alldigit = range($from, $too);
    $allLoop = array_chunk($alldigit, 25); 
    $pages_count = $allLoop;
    
?>
<?php
    include 'testData.php';
    $jsonArr = array(
            'job' => $header['job'],
            'poNum' => $header['po_number'],
            'lineItem' => $header['line_item'],
            'total' => $header['total_order'],
            'startDate' => $header['date_started'],
            'shipDate' => $header['ship_date'],
            'geoRingCon' => $footer['geoform_ring_concentric'],
            'geoRingCon2' => $footer['geoform_ring_concentric-2'],
            'geoRingCon3' => $footer['geoform_ring_concentric-3'],
            'geoRingCon4' => $footer['geoform_ring_concentric-4'],
            'from' => $from,
            'too' => $too,
            'pageCount' => $pages_count,
    );

    
?>