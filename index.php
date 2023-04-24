<?php
include 'GetCountry.php';
$data = GetCountry();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dum/css/styles.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Information About My Country</title>
</head>
<body>
    <div class="nav">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">Discord</a></li>
            <li><a href="developer.html">Developer</a></li>
        </ul>
    </div>
    <div class="Container" style="color: white; display: flex; align-items: center;">
    <div style="margin: auto;">
        <h1>Welcome <?php echo $data->ip; ?></h1>
        <h2>What we know about you:</h2>
        <ul style="list-style-type: none; padding: 0; display: block;">
            <li><strong>IP address:</strong> <?php echo $data->ip; ?></li>
            <li><strong>ISP:</strong> <?php echo $data->isp; ?></li>
            <li><strong>Country:</strong> <?php echo $data->location->region ?></li>
            <li><strong>Time-Zone:</strong> <?php echo $data->location->timezone; ?></li>
            <li><strong>ISP domain:</strong> <?php echo $data->as->domain; ?></li>
        </ul>
    </div>
</div>
</body>
</html>