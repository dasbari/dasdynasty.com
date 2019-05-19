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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Line Chart</title>
    
</head>
<body>
    <div id="title">
  <div class="container">
    <canvas id="myChart"></canvas>
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
            'rgba(255, 99, 132, 0.6)'
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
          fontSize:25
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
</div>
</body>
</html>
