<?php
    include '../Connections/connection.php';
?>

<!-- Displays the order progress information for the mill that is clicked on from the active orders page --> 

<?php
    $id = $_GET['id'];
    $company = $_GET['company'];
    $totTub = $_GET['quantity'];
    //write query for all orders
    $sql = "SELECT * FROM tube_stations WHERE ID = $id";

    //make query & get result
    if ($result= $conn -> query($sql)) {
	
	}
	
    //fetch resulting rows as an array
    $orderACT = mysqli_fetch_assoc($result);

    //getting updated number of tubes
    $currTub = $orderACT['Inspection_Total'];
    $percent = round(($currTub/$totTub)*100);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Table display for out going TPM orders for the next two weeks">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
        <meta http-equiv="refresh" content="3600">
        
        
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src = "https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src = "https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel = "stylesheet" href = "activeOrders.css">
        <link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <link href = "https://fonts.googleapis.com/css?family=Merriweather|Playfair+Display|Raleway:400,700|Vollkorn:700&display=swap" rel="stylesheet">

        <title>Displaying Progress</title>
    </head>
  <body >
  <div class="nav center">
        <div class="menu">
            <a href="upcomingOrders.php" >Upcoming Orders</a>
            <a href="../../TPM_Orders/todTomOrders.php" >Shipping Today and Tomorrow</a>
            <a href="../../TPM_Orders/viewOrders.php" >All Orders</a>
            <a href="millTable.php">Mills</a>
            <a href="index.php">Active Orders</a>
        </div>
    </div>
    <div class="tableContainer">
        <div class ="title">
                <h2 id="OOTitle"><b> Job: <?php echo $orderACT['Job_Number']; ?></b></h2>
                <h3><b>Company: <?php echo $company; ?></b></h3>
                <h3><b>Quantity: <?php echo $totTub; ?></b></h3>
                <h3><b>Tubes Left: <?php echo $totTub - $currTub; ?></b></h3>
                <br><br />
        </div>
            <div class="outter">
                <div class="inner">
                    <div class="right percent">
                        <b><?php echo $percent ?>%</b>
                    </div>  
                </div>
            </div>
            <br><br />
    </div>
    <section class="container grey lighten-4">
        <div class="center">
            <style type="text/CSS">
              .outter{
                    height:27px;
                    width: 60%;
                    border: solid 2px black;
                    border-radius: 3px;
                    margin-left: 20%;
                }

                .inner{
                    height:24px;
                    width: <?php echo $percent ?>%;
                    border-right: solid 2px black;
                    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#b4e391+0,61c419+50,b4e391+100;Green+3D */
                    background: #b4e391; /* Old browsers */
                    background: -moz-linear-gradient(top, #b4e391 0%, #61c419 50%, #b4e391 100%); /* FF3.6-15 */
                    background: -webkit-linear-gradient(top, #b4e391 0%,#61c419 50%,#b4e391 100%); /* Chrome10-25,Safari5.1-6 */
                    background: linear-gradient(to bottom, #b4e391 0%,#61c419 50%,#b4e391 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b4e391', endColorstr='#b4e391',GradientType=0 ); /* IE6-9 */


                }
            </style>
            
            <ul class="progList">
                <li id="mill"> Mill <?php echo '<div class= "display"> '.$orderACT['Mill_Number'].' </div>'; ?></li>
                <li> Tubes Welded Today at <?php echo $orderACT['Time_Weld']; ?><?php echo '<div class= "display"> '.$orderACT['Welding_Tod'].' </div>'; ?></li>
                <li> Tubes Inspected Today at <?php echo $orderACT['Time_Insp']; ?><?php echo '<div class= "display"> '.$orderACT['Inspection_Tod'].' </div>'; ?></li>
                <li> Total Tubes Welded <?php echo '<div class= "display"> '.$orderACT['Welding_Total'].' </div>'; ?></li>
                <li> Total Tubes Inspected <?php echo '<div class= "display"> '.$orderACT['Inspection_Total'].' </div>'; ?></li>
                
            </ul>
        </div>
    
    
  </body>
</html>