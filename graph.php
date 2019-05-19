<?php
	/* Database connection settings */
	$con=mysql_connect("localhost","root");
if(!$con)
{
    die('could not connect :'.mysql_error());
}
mysql_select_db("das bari",$con);
	$data1 = '';
	$data2 = '';

	//query to get data from the table
	$sql = "SELECT * FROM `expenses` ";
    $result = mysql_query($sql);

	//loop through the returned data
	while ($row = mysql_fetch_array($result)) {

		$data1 = $data1 . '"'. $row['amount'].'",';
        $data2 = $data2 . '"'. $row['items'].'",';
	}

	$data1 = trim($data1,",");
    $data2 = trim($data2,",");
?>

<html>
    <head>
         <link rel="icon" type="image/icon" href="icons/favicon.png"/>
        <link href="css/Main.css" rel="stylesheet"/>
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/JQUERY%20Main.js"></script>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Line Chart</title>
    </head>
    <body>
        <div id="MenuIcon">
            <div id="MenuLine"></div>
        </div>
        
        <div id="MainMenu">
            <div id="logo">
                <img src="icons/anjanlogo.png" height="150px" width="300px"/>
            </div>
            <ul>
                <a href="homePage.html"><li>HOME<div class="line"></div></li></a>
                <a href="invitation.html"><li>INVITATION<div class="line"></div></li></a>
                <a href="expenses.html"><li>EXPENSES<div class="line"></div></li></a>
                <a href="dasDynasty.html"><li>DAS DYNASTY<div class="line"></div></li></a>
                <a href="Gallery.html"><li>GALLERY<div class="line"></div></li></a>
                <a href="pieGraph.php"><li>PIE CHART<div class="line"></div></li></a>
                <a href="barGraph.php"><li>BAR CHART<div class="line"></div></li></a>
            </ul>
            <div id="close">
                <img src="icons/Close.png" height="30px" width="30px"/>
            </div>
        </div>
            <div id="title">
  <div class="container">
    <canvas id="myChart" style="padding-top:80px; padding-left:150px;"></canvas>
  </div>

  <script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    //Chart.defaults.global.defaultFontFamily = 'Lato';
    //Chart.defaults.global.defaultFontSize = 18;
    //Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:[<?php echo $data2; ?> ],
        datasets:[{

          data:[<?php echo $data1; ?> ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)',
              'tomato',
              'green',
              'royalblue',
              'rgba(255, 8, 64, 0.6)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'EXPENSE CHART OF 2019',
          fontSize:35,
            fontFamily:'century gothic'
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
            
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
            <div id="exptotal">
        <?php
                $query1 = "SELECT SUM(amount) FROM `expenses`"; 
                $result1 = mysql_query($query1) or die(mysql_error());
                while($row = mysql_fetch_array($result1)){
                    echo "<h4 align='center'>Total Expenses amount :</h4><br> <h3 align='center'> ₹ ". $row['SUM(amount)'];
                    echo"</h3>";
                }
            ?>        
    </div>
    <div id="tabExp" style="padding-bottom:40px;">
            <?php
                $query="SELECT * FROM `expenses`";
                $result=mysql_query($query);
            ?>
            <table align="center" style="border:1px solid black;width:400px; line-height:25px;">
                <tr>
                    <th style="border-right:1px solid black;border-bottom:1px solid black; text-align:center;background-color:tomato;">YEAR</th>
                    <th style="border-right:1px solid black;border-bottom:1px solid black;text-align:center;background-color:tomato;">ITEMS</th>
                    <th style="border-bottom:1px solid black;text-align:center;background-color:tomato;">AMOUNT</th>
                </tr>
                <?php
                    while($rows=mysql_fetch_assoc($result))
                    {
                ?>
                <tr>
                    <td style="border-right:1px solid black;border-bottom:1px solid black;"><?php echo $rows['year']; ?></td>
                    <td style="border-right:1px solid black;border-bottom:1px solid black;"><?php echo $rows['items']; ?></td>
                    <td style="border-bottom:1px solid black;"><?php echo"₹" .$rows['amount']; ?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>             
</div>
    </body>
</html>