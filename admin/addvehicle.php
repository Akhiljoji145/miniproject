<?php
include("../php/connection.php");
$sql1="select lot_code from lots where lot_status='OUT'";
$result1=mysqli_query($conn,$sql1);

echo"<html>
    <head>
        <link rel='stylesheet' href='../css/addvehicle.css'>
    </head>
    <body>
        <div>
        <form action='../php/addvehiclecheck.php' method='POST'>
        <div class='form'>
        <p>
        <label>vehicle name:</label><input class='name' type='text' name='vehi_name'>
        </p>
        <br>
        <p>
        <label>vehicle type:</label><select  name='vehi_type'>
        <option>select vehicle type</option>
        <option value='twowheeler'>two wheeler</option>
        <option value='fourwheeler'>four wheeler</option>
        </select>
        </p>
        <br>
        <p>
        <label>vehicle no:</label><input placeholder='enter in capital letters' type='text' name='vehi_no'>
        </p> 
        <br>
        <p>
        <label>lot no:</label>
        <select name='lot_code'>";
        while($row2=mysqli_fetch_assoc($result1))
        {
         echo"<option>";
         print_r($row2['lot_code']);
         echo"<option>";
        }
        echo"</select>
        </p>
        <br>
        <p>
        <label>customert id:</label><input type='text' name='id'>
        </p>
        <br>
        <p>
        <label>contact no:</label><input type='text' name='phno'>
        </p>
        <br>
        <p><label>time of arrival:</label><input type='time' name='time'></p>
        <br>
        <p><label>date of arrival:</label><input type='date' name='date'></p>
        <br>
        </div>
        <input class='size' type='submit'  value='add'>
        
    </form>
    </div>
    </body>
</html>";
?>