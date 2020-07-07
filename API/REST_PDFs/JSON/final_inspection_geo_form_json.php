<?php
    if(isset($_GET['from'])){
            $from = $_GET['from'];
    }else{
            $from = 1;
    }

    if(isset($_GET['to'])){
            $too = $_GET['to'];
    }else{
            $too = 20;
    }

        $total = $too - $from;
        $no_of_pages = ceil($total/25);
        $pages_count = array();

        for ($i = 0; $i < $no_of_pages; $i++)
        {
            array_push($pages_count, $i);
        }
        foreach($pages_count as $key=>$value){
            if ($key == 0) {
                if ($too < 25) {
                $to = $too;  
                } else {
                $to = $from+24;
                }
            } else {
                $from = $from+25;
                $to2 = $to+25;
                if ($to2 < $too) {
                $to = $to+25;
                } else {
                $to = $too;
                }
            }
        }
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
            'totalOrder' => $header['total_order'],
            'od' => $header['od'],
            'odPostive' => $header['od_postive'],
            'odNegtive' => $header['od_negtive'],
            'startDate' => $header['date_started'],
            'idDrift' => $header['id_drift'],
            'shipDate' => $header['ship_date'],
            'inspNotes' => $records['insp_notes'],
            'finalInsp' => $footer['final_inspection'],
            'finalInsp2' => $footer['final_inspection-2'],
            'finalInsp3' => $footer['final_inspection-3'],
            'finalInsp4' => $footer['final_inspection-4'],
            'from' => $from,
            'too' => $too,
            'pageCount' => $pages_count,
        );   
?>