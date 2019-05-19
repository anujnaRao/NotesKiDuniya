<?php

include("db.php");

error_reporting(0);

$sql = "select fname,count(s.sid) as `No_Of_Students` from Student s,Faculty f,Attend a,Meeting m,Conduct c where s.fid=f.fid and s.sid=a.sid and m.mid=a.mid and m.mid=c.mid and c.fid=f.fid group by f.fid having f.fid='fac03'";

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
        <th>Number of Students</th>

    </tr>
    </thead>
    <tbody>



    <?php
    while($row=mysqli_fetch_assoc($data))
    {
        echo "<tr>
         
            <td>".$row['fname']."</td>
            <td>".$row['No_Of_Students']."</td>
           

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

