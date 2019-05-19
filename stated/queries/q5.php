<?php


include("db.php");

error_reporting(0);



$sql = "select f.* from Faculty f,Student s where f.fid=s.fid group by f.fid having count(s.sid)=(select min(Count) from (select count(sid) as Count from Student group by fid)as Display);";

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
        <th>Faculty Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Email</th>
        <th>Qualification</th>
    </tr>
    </thead>
    <tbody>



    <?php
    while($row=mysqli_fetch_assoc($data))
    {
        echo "<tr>
         
             <td>".$row['fid']."</td>
            <td>".$row['fname']."</td>
            <td>".$row['gender']."</td>
            <td>".$row['doj']."</td>
            <td>".$row['address']."</td>
            <td>".$row['email']."</td>
            <td>".$row['qualification']."</td>


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