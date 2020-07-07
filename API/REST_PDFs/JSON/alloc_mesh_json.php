<?php
    $jsonArr = array(
            'job' => $header['job'],
            'poNum' => $header['po_number'],
            'lineItem' => $header['line_item'],
            'meshAlloc' => $footer['mesh_alloc'],
            'meshAlloc2' => $footer['mesh_alloc2'],
            'meshAlloc3' => $footer['mesh_alloc3'],
            'meshAlloc4' => $footer['mesh_alloc4'],
    );

    foreach($group_records as $arr){
        $jsonArr['coils'][]= array(
            "meshType" => $arr["mesh"];
            foreach($arr as $record){
                $jsonArr['coils']['coil'][] = array(
                    "coilNum" => $arr["coil_no"],
                    "weight" => $arr["weight"],
                    "heat" => $arr["heat"]
                );
            }
        );
    }

    
?>