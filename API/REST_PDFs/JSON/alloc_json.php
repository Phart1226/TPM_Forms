<?php
    
    

    $jsonArr = array(
            'job' => $header['job'],
            'poNum' => $header['po_number'],
            'lineItem' => $header['line_item'],
            'coilAlloc' => $footer['coil_alloc'],
            'coilAlloc2' => $footer['coil_alloc2'],
            'coilAlloc3' => $footer['coil_alloc3'],
            'coilAlloc4' => $footer['coil_alloc4'],
    );

    foreach($records as $record){
        $jsonArr['coils'][]= array(
            'coilNum' => $record['coil_no'],
            'weight' => $record['weight'],
            'heat' => $record['heat']
        );
    }
?>
    
