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
            'od' => $header['od'],
            'odPos' => $header['od_postive'],
            'odNeg' => $header['od_negtive'],
            'startDate' => $header['date_started'],
            'idDrift' => $header['id_drift'],
            'shipDate' => $header['ship_date'],
            'inspNotes' => $records['insp_notes'],
            'inspSta' => $footer['inspection-station'],
            'inspSta2' => $footer['inspection-station-2'],
            'inspSta3' => $footer['inspection-station-3'],
            'inspSta4' => $footer['inspection-station-4'],
            'from' => $from,
            'too' => $too,
            'pageCount' => $pages_count
    );

    
?>