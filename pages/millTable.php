
<!-- Displays the active and pending jobs for each mill-->

<?php
    include '../Connections/connection.php';
?>

<?php

    //write query for all orders
    $sql = 'SELECT * FROM active_orders WHERE Mill_Number = 1';

    //make query & get result
    if ($result= $conn -> query($sql)) {
	}
	

    $millOne = array();
    //fetch resulting rows as an array
    while($order = mysqli_fetch_array($result)){
        $millOne[] = $order;
    }

    //write query for all orders
    $sql = 'SELECT * FROM active_orders WHERE Mill_Number = 2';

    //make query & get result
    if ($result= $conn -> query($sql)) {
	
	}
	

    $millTwo = array();
    //fetch resulting rows as an array
    while($order = mysqli_fetch_array($result)){
        $millTwo[] = $order;
    }

    //write query for all orders
    $sql = 'SELECT * FROM active_orders WHERE Mill_Number = 3';

    //make query & get result
    if ($result= $conn -> query($sql)) {
	
	}
	

    $millThree = array();
    //fetch resulting rows as an array
    while($order = mysqli_fetch_array($result)){
        $millThree[] = $order;
    }

    //write query for all orders
    $sql = 'SELECT * FROM active_orders WHERE Mill_Number = 4';

    //make query & get result
    if ($result= $conn -> query($sql)) {
	
	}
	

    $millFour = array();
    //fetch resulting rows as an array
    while($order = mysqli_fetch_array($result)){
        $millFour[] = $order;
    }

    //write query for all orders
    $sql = 'SELECT * FROM active_orders WHERE Mill_Number = 5';

    //make query & get result
    if ($result= $conn -> query($sql)) {
	
	}
	

    $millFive = array();
    //fetch resulting rows as an array
    while($order = mysqli_fetch_array($result)){
        $millFive[] = $order;
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Table display for out going TPM orders for the next two weeks">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">        
        
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src = "https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src = "https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel = "stylesheet" href = "millStylesheet.css">
        <link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <link href = "https://fonts.googleapis.com/css?family=Merriweather|Playfair+Display|Raleway:400,700|Vollkorn:700&display=swap" rel="stylesheet">

        <title>Mill Jobs</title>
    </head>
  <body >
    <div class="center">
        <div class= "allTablesOTT">
            <div class="tableContainerOTT">
                <div class ="millTitle">
                        <h2><b>Mill 1</b></h2>
                </div>
                <div class="millTable">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Job #</td>
                                <td>OD</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($millOne as $order): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($order['Job_Number']); ?></td>
                                        <td><?php echo htmlspecialchars($order['Job_Number']); ?></td>
                                        <td><?php echo htmlspecialchars($order['Shop_Status']); ?></td>
                                    </tr> 
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tableContainerOTT">
            <div class ="millTitle">
                        <h2><b>Mill 2</b></h2>
                </div>
                <div class="millTable">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Job #</td>
                                <td>OD</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($millTwo as $order): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($order['Job_Number']); ?></td>
                                        <td><?php echo htmlspecialchars($order['Job_Number']); ?></td>
                                        <td><?php echo htmlspecialchars($order['Shop_Status']); ?></td>                                </tr> 
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tableContainerOTT" id= "millTT" >
            <div class ="millTitle" >
                        <h2><b>Mill 3</b></h2>
                </div>
                <div class="millTable">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Job #</td>
                                <td>OD</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($millThree as $order): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($order['Job_Number']); ?></td>
                                        <td><?php echo htmlspecialchars($order['Job_Number']); ?></td>
                                        <td><?php echo htmlspecialchars($order['Shop_Status']); ?></td>
                                    </tr> 
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="allTablesFF">
        <div class="tableContainerFF">
        <div class ="millTitle">
                    <h2><b>Mill 4</b></h2>
            </div>
            <div class="millTable">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>Job #</td>
                            <td>OD</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($millFour as $order): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($order['Job_Number']); ?></td>
                                    <td><?php echo htmlspecialchars($order['Job_Number']); ?></td>
                                    <td><?php echo htmlspecialchars($order['Shop_Status']); ?></td>
                                </tr> 
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tableContainerFF">
        <div class ="millTitle">
                    <h2><b>Mill 5</b></h2>
            </div>
            <div class="millTable">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>Job #</td>
                            <td>OD</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($millFive as $order): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($order['Job_Number']); ?></td>
                                    <td><?php echo htmlspecialchars($order['Job_Number']); ?></td>
                                    <td><?php echo htmlspecialchars($order['Shop_Status']); ?></td>
                                </tr> 
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </body>
</html>