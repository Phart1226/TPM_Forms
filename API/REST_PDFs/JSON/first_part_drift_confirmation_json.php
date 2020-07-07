<?php
    include 'testData.php';
    $jsonArr = array(
            'job' => $header['job'],
            'mill' => $records['mill'],
            'thickness' => $records['thickness'],
            'gage' => $header['gage'],
            'dimpleDepth' => $records['depth_of_dimple'],
            'dimpleDepthP' => $header['depth_of_dimple_plus'],
            'dimpleDepthM' => $header['depth_of_dimple_minus'],
            'blankEnd' => $records['blank_end'],
            'blankEndP' => $header['blank_end_plus'],
            'blankEndM' => $header['blank_end_minus'],
            'idDrift' => $records['id_drift'],
            'firstPartDrf' => $footer['first_part_drift'],
            'firstPartDrf2' => $footer['first_part_drift-2'],
            'firstPartDrf3' => $footer['first_part_drift-3'],
            'firstPartDrf4' => $footer['first_part_drift-4'],
    );

    
?>