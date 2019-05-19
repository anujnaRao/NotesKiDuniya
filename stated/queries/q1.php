<?php


include("db.php");

error_reporting(0);



$sql = "select fname,f.email from Faculty f,Student s where f.fid=s.fid and s.fsname='Rajesh'";

$data = mysqli_query($con,$sql);

$total=mysqli_num_rows($data);

if($total!=0)
{

    ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="query.css"/>
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

        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>



    <?php
    while($row=mysqli_fetch_assoc($data))
    {
        echo "<tr>
            <td>".$row['fname']."</td>          
            <td>".$row['email']."</td>
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
