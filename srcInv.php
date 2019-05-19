<?php

$con=mysql_connect("localhost","root");
if(!$con)
{
    die('could not connect :'.mysql_error());
}
mysql_select_db("das bari",$con);

$query="SELECT * FROM `invite` WHERE `name`='$_POST[sname]' and `add`='$_POST[sadd]'";
$result=mysql_query($query) or die(mysql_error());
$count=mysql_num_rows($result);


?>

<html>
    <head>
        <title>Print Invitation</title>
        <link rel="icon" type="image/icon" href="icons/favicon.png"/>
        <link rel="stylesheet" type="text/css" href="css/invitePage.css">
        <link rel="stylesheet" type="text/css" href="css/addPerson.css">
        
    </head>
    
    <body>
        <header>
            <span id="icon"><img src="icons/anjanlogo.png"></span>
            <div id="box"></div>
            <div id="container">
                <div id="menu">
                    <ul>
                        <li><div id="home"><a href="homePage.html">HOME</a></div></li>
                        <li><div id="invite"><a href="invitation.html">INVITATION</a></div></li>
                        <li><div id="exp"><a href="expenses.html">EXPENSES</a></div></li>
                        <li><div id="das"><a href="#">DAS DYNASTY</a></div></li>
                        <li><div id="gallery"><a href="Gallery.html">GALLERY</a></div></li>
                    </ul>
                </div>
                <span id="logout"><img src="icons/logout.png"></span>
                <span id="logoutText"><a href="logout.html">LOG OUT</a></span>
            </div>
        </header>
        <footer>
            <span id="mini">
                <span class="miniIcon"><a href="https://www.facebook.com/das.bari.104"><img src="icons/facebookBlue.png"></a></span>
                <span class="miniIcon"><a href="https://www.youtube.com/channel/UClOENNtX9oitgFrpqv0qOmg/videos"><img src="icons/youtubeRed.png"></a></span>
                <span class="miniIcon"><a href="https://www.instagram.com/dasbari_dasdynasty/"><img src="icons/instagram.png"></a></span>
            </span>
            <span id="email">e-mail: thedasdynasty@gmail.com</span>
            <span id="tc">2019 | Developed by Apollo Biki and Anjan Das | Terms and Conditions Applied | All rights are reserved </span>
        </footer>
        <div id="searchTab">
            <table>
                <tr>
                    <th style="border-right:1px solid black;border-bottom:1px solid black;">Name</th>
                    <th style="border-right:1px solid black;border-bottom:1px solid black;">Address</th>
                    <th style="border-bottom:1px solid black;">No. of Invited</th>
                </tr>
                <?php
                    if($count==0){
                        echo "<h1>no result found</h1>";
                    }
                    else{
                        while($rows=mysql_fetch_array($result) or die(mysql_error())){
                             
                ?>
                <tr>
                    <td style="border-right:1px solid black;border-bottom:1px solid black;"><?php echo $rows['name']; ?></td>
                    <td style="border-right:1px solid black;border-bottom:1px solid black;"><?php echo $rows['add']; ?></td>
                    <td style="border-bottom:1px solid black;"><?php echo $rows['no']; ?></td>
                </tr>
                <?php
                        echo"<h1>Record Found !</h1>";
                    }
                    }
                ?>
            </table>
        </div>
        
    </body>
</html>
