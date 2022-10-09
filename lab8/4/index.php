<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Tech Lab8</title>
</head>
<body>
    <?php
        $url = "http://10.0.15.20/lab8/restapis/10countries";
        $response = file_get_contents($url);
        $result = json_decode($response);

        foreach ($result as $ct){
            $location = $ct->latlng;
            $border = $ct->borders;
            echo "<div style=\"display: flex;\"><div style=\"flex: 30%;\">
            Name : $ct->name<br>
            Capital : $ct->capital<br>
            Population : $ct->population<br>
            Region : $ct->region<br>
            Location : ";
            foreach ($location as $lc){
                echo "$lc ";
            }
            echo "<br>Border : ";
            foreach ($border as $bd){
                echo "$bd ";
            }
            echo "</div>
            <div style=\"flex:70%;\">
                <img style=\"width: 240px;\" src=\"$ct->flag\">
            </div></div><br><br><br>";
        }
    ?>
</body>
</html>