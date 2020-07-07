<?php

    
    function merge($pages){

        define("BASE_PATH", "./REST_PDFs/JSON/");
        $data = array();

        if (in_array("tube_mill_setup", $pages)) {
            
            /*require_once BASE_PATH . 'report_data.php';

            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;

            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'tube_mill_setup_json.php';

            $data = $jsonArr;

        }

        if (in_array("tube_mill_log", $pages)) {

            /*require_once BASE_PATH . 'report_data.php';
            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;

            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'tube_mill_log_json.php';
            
            $data = array_merge($data, $jsonArr);

        }
        
        
        if (in_array("first_part_drift_confirmation", $pages)) {

            /*require_once BASE_PATH . 'report_data.php';
            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;

            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'first_part_drift_confirmation_json.php';

            $data = array_merge($data, $jsonArr);
        }
        
        if (in_array("welding_station_check_list", $pages)) {

            /*require_once BASE_PATH . 'report_data.php';
            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;

            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'welding_station_check_list_json.php';
            $data = array_merge($data, $jsonArr);        }
        
        if (in_array("worksheet", $pages)) {

            /*require_once BASE_PATH . 'report_data.php';

            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;
            $header['tube_heat_number'] = '';
            $header['ring_heat_number'] = '';

            $q = "SELECT 
                steel_tbl.heat
                FROM   
                    steel_tbl 
                    INNER JOIN (orders_tbl 
                            INNER JOIN coil_tbl 
                                    ON orders_tbl.job = coil_tbl.job) 
                        ON steel_tbl.work = coil_tbl.work 
                WHERE
                    orders_tbl.job = '$job'";

            $temp = $mysql->select($q);

            if ($temp)
            {
                $header['tube_heat_number'] = $temp[0]['heat'];
            }



            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'worksheet_json.php';
            $data = array_merge($data, $jsonArr);        }
        
        if (in_array("dp_inspection", $pages)) {

            /*require_once BASE_PATH . 'report_data.php';
            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;

            $header["print_date"] = date(DATE_FORMAT);*/


            require_once BASE_PATH . 'dp_inspection_json.php';
            $data = array_merge($data, $jsonArr);

        }
        
        if (in_array("cutoff_station_check_sheet", $pages)) {

            /*require_once BASE_PATH . 'report_data.php';
            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;

            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'cutoff_station_check_sheet_json.php';
            $data = array_merge($data, $jsonArr);
        }
        
        if (in_array("inspection_rpt", $pages)) {
        
            /*require_once BASE_PATH . 'report_data.php';
            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;

            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'inspection_rpt_json.php';
            $data = array_merge($data, $jsonArr);
        }

        if (in_array("final_inspection_geo_form", $pages)) {

           /* require_once BASE_PATH . 'report_data.php';
            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;

            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'final_inspection_geo_form_json.php';
            $data = array_merge($data, $jsonArr);
        }
        
        
        if (in_array("ring_station_check_list", $pages)) {

            /*require_once BASE_PATH . 'report_data.php';
            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;

            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'ring_station_check_list_json.php';
            $data = array_merge($data, $jsonArr);
        }
        if (in_array("geo_form_ring_inspection", $pages)) {

            /*require_once BASE_PATH . 'report_data.php';
            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;

            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'geo_form_ring_inspection_json.php';
            $data = array_merge($data, $jsonArr);
        }
        if (in_array("geo_form_ring_concentric_inspection", $pages)) {

            /*require_once BASE_PATH . 'report_data.php';
            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;

            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'geo_form_ring_concentric_inspection_json.php';
            $data = array_merge($data, $jsonArr);
        }
        if (in_array("Mill_station_first_part", $pages)) {

            /*require_once BASE_PATH . 'report_data.php';
            if (empty($records))
            {
                die("No data found");
            }

            $header = $records;

            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'Mill_station_first_part_json.php';
            $data = array_merge($data, $jsonArr);
        }
        if (in_array("alloc", $pages)) {

            /*require_once BASE_PATH . 'report_data.php';
            $job = $_GET['job'];

            $mysql = new Mysql();

            $q = "SELECT 
                order_specs.job, 
                order_specs.customer, 
                order_specs.po as po_number, 
                order_specs.item as line_item
                FROM  
                    order_specs 
                WHERE 
                    order_specs.job = '$job'; ";

            $header = $mysql->select($q);

            if (empty($header))
            {
                die("No data found");
            }

            $header = $header[0];


            $query = "SELECT DISTINCT coil_tbl.coil_no,
                        coil_tbl.weight,
                        steel_tbl.material,
                        coil_tbl.work,
                        steel_tbl.gage,
                        steel_tbl.pattern,
                        steel_tbl.holes,
                        steel_tbl.centers,
                        steel_tbl.width,
                        steel_tbl.heat,
                        coil_tbl.date_received,
                        coil_tbl.allocated,
                        coil_tbl.job,
                        coil_tbl.Cycles
            FROM coil_tbl
            INNER JOIN steel_tbl ON coil_tbl.work = steel_tbl.work
            INNER JOIN part_tbl ON part_tbl.pattern = steel_tbl.pattern
                            AND part_tbl.centers = steel_tbl.centers
                            AND part_tbl.holes = steel_tbl.holes
                            AND part_tbl.type = steel_tbl.material
                            AND part_tbl.gage = steel_tbl.gage
            WHERE coil_tbl.job='$job' AND coil_tbl.allocated ='1'
            ORDER BY coil_tbl.job, coil_tbl.coil_no";

            $records = $mysql->select($query);


            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'alloc_json.php';
            $data = array_merge($data, $jsonArr);
        }

        if (in_array("alloc_mesh", $pages)) {

            /*require_once BASE_PATH . 'report_data.php';
            $job = $_GET['job'];

            $mysql = new Mysql();

            $q = "SELECT 
                order_specs.job, 
                order_specs.customer, 
                order_specs.po as po_number, 
                part_specs.part as part_no, 
                part_specs.part as part,
                order_specs.item as line_item, 
                part_specs.layer_1_mesh
            FROM  
                order_specs 
                INNER JOIN part_specs  ON order_specs.part = part_specs.part    
            WHERE 
                order_specs.job = '$job' ";

            $header = $mysql->select($q);

            if (empty($header))
            {
                die("No data found");
            }

            $header = $header[0];

            $mesh = $header['layer_1_mesh'];
                    
            $query = "
                SELECT     
                    orders_tbl.job, 
                    orders_tbl.po, 
                    orders_tbl.item, 
                    mesh_tbl.mesh_no, 
                    mesh_tbl.width, 
                    mesh_tbl.length, 
                    mesh_tbl.heat, 
                    mesh_tbl.mesh, 
                    mesh_tbl.type 
            FROM       
                orders_tbl 
                INNER JOIN mesh_tbl ON orders_tbl.job = mesh_tbl.tpm_job 
            WHERE     
                orders_tbl.job = '$job'";

            $records = $mysql->select( $query);

            $group_records = array();

            foreach($records as $record)
            {
                $group_records[$record['mesh']][] = $record;
            }

            $header["print_date"] = date(DATE_FORMAT);*/

            require_once BASE_PATH . 'alloc_mesh_json.php';

            $data = array_merge($data, $jsonArr);
        }

        require_once BASE_PATH . 'testData.php';

        $endJson = array(
            'orderID' => $orderID,
            'token' => $token,
            'formData' => $data

        );

        return JSON_encode($endJson);
    }
?>