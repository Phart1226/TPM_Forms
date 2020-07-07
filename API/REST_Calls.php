<?php

    require_once 'mergeJSON.php';
    
    
    function processRequest($pages, $method){
         
        //$path = $_GET['path'];
        
        switch ($method) {
        case 'PUT':  
            break;
        case 'POST':  
            break;
        case 'GET':
            /*if ($path->OrderId) {
                $response = getForm($path->formNum);
            } elseif($path->startRec) {
                $response = getForms($path->startRec, $paths->endRec);
            } else{*/
                
                $response = getAllForms($pages);
            //}
            break;
        default:
            //$response = notFound($path);  
            break;
        }

        return $response;
    }


    function getAllForms($pages){
        

        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = merge($pages); //JSON object from mergeJSON

        return $response;
    }

    function notFound($path){
        echo $path . 'not found';
    }


?>