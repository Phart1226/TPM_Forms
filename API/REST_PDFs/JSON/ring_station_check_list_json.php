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
            'ringMin' => $header['ring_min'],
            'lineItem' => $header['line_item'],
            'ringMax' => $header['ring_max'],
            'total' => $header['total_order'],
            'partDesc' => $header['part_desc'],
            'startDate' => $header['date_started'],
            'ringSta' => $footer['ring_station'],
            'ringSta2' => $footer['ring_station-2'],
            'ringSta3' => $footer['ring_station-3'],
            'ringSta4' => $footer['ring_station-4'],
            'from' => $from,
            'too' => $too,
            'pageCount' => $pages_count
    );

    
?>