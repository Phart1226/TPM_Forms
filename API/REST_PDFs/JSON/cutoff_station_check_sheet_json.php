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
            'from' => $from,
            'too' => $too,
            'pageCount' => $pages_count,
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
                'repairSpec' => $header['repair_spec'],
                'amps' => $header['repair_amps'],
                'volts' => $header['repair_volts'],
                'speed' => $header['repair_speed'],
                'fillerRod' => $header['filler_rod'],
                'cutoffSta' => $footer['cutoff-station'],
                'cutoffSta2' => $footer['cutoff-station2'],
                'cutoffSta3' => $footer['cutoff-station3'],
                'cutoffSta4' => $footer['cutoff-station4'],
            
            
    );
?>

