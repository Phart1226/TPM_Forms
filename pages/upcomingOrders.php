
<!-- Displays all non-active orders-->

<?php
    include '../Connections/connection.php';
?>

<?php

    //write query for all orders
    $sql = 'SELECT * FROM active_orders ORDER BY Ship_Date';

    //make query & get result
    if ($result= $conn -> query($sql)) {
	
	}
	

    $ordersACT = array();
    //fetch resulting rows as an array
    while($order = mysqli_fetch_array($result)){
        $ordersACT[] = $order;
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
        <link rel = "stylesheet" href = "activeOrders.css">
        <link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <link href = "https://fonts.googleapis.com/css?family=Merriweather|Playfair+Display|Raleway:400,700|Vollkorn:700&display=swap" rel="stylesheet">

        <title>Upcoming Orders</title>
    </head>
  <body >
    <div class="nav center">
        <div class="menu">
            <a href="index.php" >Active Orders</a>
            <a href="../../TPM_Orders/todTomOrders.php">Shipping Today and Tomorrow</a>
            <a href="../../TPM_Orders/viewOrders.php">All Orders</a>
            <a href="millTable.php">Mills</a>
        </div>
    </div>
    <div class="tableContainer">
        <div class ="title">
                <h2 id="OOTitle"><b>Upcoming Orders</b></h2>
        </div>
        <div class="outTable">
            <table id= "upOrders" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Customer</td>
                        <td>PO#</td>
                        <td>Ship Date</td>
                        <td>Part #</td>
                        <td>Job #</td>
                        <td>QTY</td>
                        <td>Description</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ordersACT as $order): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($order['Company']); ?></td>
                                <td><?php echo htmlspecialchars(1234567); ?></td>
                                <td><?php echo htmlspecialchars($order['Ship_Date']); ?></td>
                                <td><?php echo htmlspecialchars(12345); ?></td>
                                <td><?php echo htmlspecialchars($order['Job_Number']); ?></td>
                                <td><?php echo htmlspecialchars($order['Quantity']); ?></td>
                                <td id="desc"><?php echo htmlspecialchars("theuh uhtuhe euruv uruebrv urhub"); ?></td>
                            </tr> 
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
  </body>
</html>