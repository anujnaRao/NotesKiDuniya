<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Page</title>
    <link rel="stylesheet" href="../design/bootstrapmin.css">
    <style>

        body
        {
            background-color: #95999c;
        }
        .comp{
            background-color: #f9b2ac;
            display:block;
            margin:200px 500px 50px 500px;
            <!--border: 1px solid black;-->
        }

        .c1,.c2,.c3
        {
            margin-left:60px;
            padding: 20px;
        }


    </style>


</head>
<body>
<form method="post" action="">

    <div class="comp">
        <label style="text-align: center;font-family: Playfair Display, serif;margin-left: 220px;font-size: 20px;">Upload File</label>
        <div class="c1">
        <label>Name&emsp;&emsp;&nbsp;&nbsp;</label>
        <input type="text" name="pname" id="pname"/><br/>
        </div>

        <div class="c2">
        <label>Subject&emsp;&emsp;</label>
        <input  type="text" name="sname" id="sname"/><br/>
        </div>

        <div class="c3">
        <label>File Upload&emsp;</label>
        <input type="file" name="fileup" id="fileup"/><br/>
        </div>

        <div>
        <!--<label style="font-size: x-small;">Note: The pdf file size should be less than 10MB</label><br/>-->
        <input style="margin: 0 0 10px 220px;" type="submit" name="Upload" id="submit"/>
        </div>

    </div>
</form>
</body>
</html>

