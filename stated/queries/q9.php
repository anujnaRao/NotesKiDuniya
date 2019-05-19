<?php

include("db.php");

error_reporting(0);

$sql = "select m.mid as 'Id',m.time as 'Time',m.date as 'Date' from Meeting m,Faculty f,Conduct c where c.mid=m.mid and f.fid=c.fid and f.fname='Chandana'";

$data = mysqli_query($con,$sql);

$total=mysqli_num_rows($data);

if($total!=0)
{

?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrapmin.css"/>
    <script src="jquerymin.js"></script>
    <script src="poppermin.js"></script>
    <script src="bootstrapmin.js"></script>


</head>
<body>
<div class="container">

    <table class="table">
        <thead>
        <tr>
            <th>Meeting ID</th>
            <th>Time</th>
            <th>Date</th>

        </tr>
        </thead>
        <tbody>



        <?php
        while($row=mysqli_fetch_assoc($data))
        {
            echo "<tr>
         
            <td>".$row['Id']."</td>
            <td>".$row['Time']."</td>
            <td>".$row['Date']."</td>

     </tr>";
        }

        }
        else
        {
            echo "No records found!";

        }
        $con->close();

        ?>
        </tbody>
    </table>
</div>


</body>
</html>


