
<!-- Displays all active orders organized by mill number-->

<?php
    include '../Connections/connection.php';
?>

<?php

    //write query for all orders
    $sql = 'SELECT * FROM active_orders WHERE Shop_Status = "ACTIVE" ORDER BY Mill_Number';

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

        <title>Active Orders</title>
    </head>
  <body >
  <div class="nav center">
        <div class="menu">
            <a href="upcomingOrders.php" >Upcoming Orders</a>
            <a href="../../TPM_Orders/todTomOrders.php" >Shipping Today and Tomorrow</a>
            <a href="../../TPM_Orders/viewOrders.php" >All Orders</a>
            <a href="millTable.php">Mills</a>
        </div>
    </div>
    <div class="tableContainer">
        <div class ="title">
                <h2 id="OOTitle"><b>Active Orders</b></h2>
        </div>
        <div class="outTable">
            <table id= "outgoingOrders" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Mill</td>
                        <td>Job Number</td>
                        <td>Company Name</td>
                        <td>Quantity</td>
                        <td>Ship Date</td>
                        <td>Most Recent Update</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ordersACT as $order): ?>
                            <tr>
                                <td class="firstRow"><?php echo "<a href='displayProg.php?id=".$order['ID']."&company=".$order['Company']."&quantity=".$order['Quantity']."'>" . htmlspecialchars($order['Mill_Number']) . "</a> "; ?></td>
                                <td><?php echo htmlspecialchars($order['Job_Number']); ?></td>
                                <td><?php echo htmlspecialchars($order['Company']); ?></td>
                                <td><?php echo htmlspecialchars($order['Quantity']); ?></td>
                                <td><?php echo htmlspecialchars($order['Ship_Date']); ?></td>
                                <td><?php echo htmlspecialchars($order['Latest_Upd']); ?></td>
                            </tr> 
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
  </body>
</html>