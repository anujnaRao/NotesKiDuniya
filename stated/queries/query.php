<?php
include("db.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="query.css"/>
    <link rel="stylesheet" href="bootstrapmin.css"/>
    <script src="jquerymin.js"></script>
    <script src="poppermin.js"></script>
    <script src="bootstrapmin.js"></script>


</head>
<body>
    <div class="container-fluid">
   <h2 class="text-center">Queries</h2>
    <form method="POST" action=" " class="form-check">
        <table class="table">
            <tr>
                <td><label>1.Display faculty name and email who counsels Rajesh</label></td>
                <td><a href="q1.php"><button type="button" class="rounded-bottom" >Check</button></a></td>
            </tr>

            <tr>
                <td><label>2.Display students name who are under Rudra</label></td>
                <td><a href="q2.php"><button type="button" >Check</button></a></td>
            </tr>

            <tr>
                <td><label>3.Display faculty details who has joined after 2015</label></td>
                <td><a href="q3.php"><button type="button" id="q3">Check</button></a></td>
            </tr>

            <tr>
                <td><label>4.List the faculty name and the number of students counselled by him/her</label></td>
                <td><a href="q4.php"><button type="button" id="q4">Check</button></a></td>
            </tr>

            <tr>
                <td><label>5.List the details of faculty under whom minimum number of students are counselled</label></td>
                <td><a href="q5.php"><button type="button" id="q5">Check</button></a></td>
            </tr>

            <tr>
                <td><label>6.List the students name who have joined through 'Management quota' under faculty 'Leela'</label></td>
                <td><a href="q6.php"><button type="button" id="q6">Check</button></a></td>
            </tr>

            <tr>
                <td><label>7.List number of students who attended the meeting conducted by faculty id 'fac03'</label></td>
                <td><a href="q7.php"><button type="button" id="q7">Check</button></a></td>
            </tr>

            <tr>
                <td><label>8.List the student name,parent name,parent contact number of the students who did not attend meeting held by Dr.Ramya on Jan-13-2019</label></td>
                <td><a href="q8.php"><button type="button" id="q8">Check</button></a></td>
            </tr>

            <tr>
                <td><label>9.List the faculty name and meeting details which were conducted on 2018-02-16</label></td>
                <td><a href="q9.php"><button type="button" id="q9">Check</button></a></td>
            </tr>

            <tr>
                <td><label>10.List the details of meeting conducted by Dr.Chandana</label></td>
                <td><a href="q10.php"><button type="button" id="q10">Check</button></a></td>
            </tr>

        </table>

    </form>
    </div>

</body>
</html>