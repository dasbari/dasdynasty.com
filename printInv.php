<?php

$con=mysql_connect("localhost","root");
if(!$con)
{
    die('could not connect :'.mysql_error());
}
mysql_select_db("das bari",$con);

$query="SELECT * FROM invite";
$result=mysql_query($query);



?>

<html>
    <head>
        <title>Print Invitation</title>
        <link rel="icon" type="image/icon" href="icons/favicon.png"/>
        <style>
            img{
                height:45px;
                width:40px;
                position: absolute;
                top:8%;
                left:90%;
                transform: translate(-50%,-50%);
            }
            #tot{
                position: absolute;
                top:9%;
                left:20%;
                transform: translate(-50%,-50%);
            }
        </style>
    </head>
    
    <body>
        <div id="printTab">
            <h1 align="center">DAS BARIR KALI PUJA O BHAI PHONTA </h1>
            <h3 align="center">Invitation List, 2019 </h3>
            <div id="tot">
            <?php
                $query1 = "SELECT SUM(no) FROM invite"; 
                $result1 = mysql_query($query1) or die(mysql_error());
                while($row = mysql_fetch_array($result1)){
                    echo "Total no of invited : ". $row['SUM(no)'];
                }
            ?>
            </div>
            <a title="print screen" alt="print screen" onclick="window.print();" target="_blank" style="cursor:pointer;"><image src="icons/print-icon.png"></image></a>
            <table align="center" style="border:1px solid black;width:600px;">
                <tr>
                    <th style="border-right:1px solid black;border-bottom:1px solid black;">Name</th>
                    <th style="border-right:1px solid black;border-bottom:1px solid black;">Address</th>
                    <th style="border-bottom:1px solid black;">No. of Invited</th>
                </tr>
                <?php
                    while($rows=mysql_fetch_assoc($result))
                    {
                ?>
                <tr>
                    <td style="border-right:1px solid black;border-bottom:1px solid black;"><?php echo $rows['name']; ?></td>
                    <td style="border-right:1px solid black;border-bottom:1px solid black;"><?php echo $rows['add']; ?></td>
                    <td style="border-bottom:1px solid black;"><?php echo $rows['no']; ?> People</td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
        <div id="total" style="width:100%; text-align:right;">
            
        </div>
        
    </body>
</html>
