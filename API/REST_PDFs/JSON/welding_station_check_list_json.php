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
            'cutoffLength' => $header['cutoff_length'],
            'cutoffLengthP' => $header['cutoff_length_plus'],
            'cutoffLengthM' => $header['cutoff_length_minus'],
            'lineItem' => $header['line_item'],
            'millSpec' => $header['mill_spec'],
            'total' => $header['total_order'],
            'od' => $header['od'],
            'odPos' => $header['od_postive'],
            'odNeg' => $header['od_negtive'],
            'millAmps' => $header['mill_amps'],
            'startDate' => $header['date_started'],
            'millVolts' => $header['mill_volts'],
            'millSpeed' => $header['mill_speed'],
            'millTorchHeight' => $header['mill_torch_height'],
            'arcLength' => $header['Arc_length'],
            'torchAngle' => $header['torch_angle'],
            'weldStaCklist' => $footer['welding_station_cklist'],
            'weldStaCklist2' => $footer['welding_station_cklist-2'],
            'weldStaCklist3' => $footer['welding_station_cklist-3'],
            'weldStaCklist4' => $footer['welding_station_cklist-4'],
            'from' => $from,
            'too' => $too,
            'pageCount' => $pages_count
    );

    
?>