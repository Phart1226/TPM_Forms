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
            'poNum' => $header['po_number'],
            'quantity' => $header['quantity'],
            'drawingNum' => $header['drawing_number'],
            'job' => $header['job'],
            'geoForm' => $footer['geoform'],
            'geoForm2' => $footer['geoform-2'],
            'geoForm3' => $footer['geoform-3'],
            'geoForm4' => $footer['geoform-4'],
            'from' => $from,
            'too' => $too,
            'pageCount' => $pages_count,
    );

    
?>