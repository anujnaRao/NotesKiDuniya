<?php


include("db.php");

error_reporting(0);




$sql = "select fsname from Student s,Faculty f where f.fid=s.fid and s.quota='Management' and s.fid=(select fid from Faculty where fname='Leela');
";
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
            <th>Faculty Name</th>


        </tr>
        </thead>
        <tbody>



        <?php
        while($row=mysqli_fetch_assoc($data))
        {
            echo "<tr>
         
            <td>".$row['fsname']."</td>
           
           

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