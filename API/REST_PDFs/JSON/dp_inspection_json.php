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
            'length' => $header['finished_length'],
            'lineItem' => $header['line_item'],
            'finLenPos' => $header['finished_length_postive'],
            'finLenNeg' => $header['finished_length_negtive'],
            'total' => $header['total_order'],
            'partDesc' => $header['part_desc'],
            'startDate' => $header['date_started'],
            'idDrift' => $header['id_drift'],
            'shipDate' => $header['ship_date'],
            'directPack' => $footer['direct_pack'],
            'directPack2' => $footer['direct_pack2'],
            'directPack3' => $footer['direct_pack3'],
            'directPack4' => $footer['direct_pack4'],
            'from' => $from,
            'too' => $too,
            'pageCount' => $pages_count,
    );

    
?>