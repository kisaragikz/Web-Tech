<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Tect Lab8</title>
</head>
<body>
    <!-- <form action="" method="POST">
        <label for="prodname">Name :</label>
        <input type="text" id="prodname" name="prodname" placeholder="Enter Product Name" required/>
        <button type="submit" name="submit">Submit</button>
    </form> -->

    <?php
        // if(isset($_POST['submit'])){
        //     $prodname = $_POST['prodname'];        
        //     $url = "http://10.0.15.20/lab8/restapis/rest/api.php?prodname=" . $prodname;
        //     $client = curl_init($url);
        //     curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        //     $response = curl_exec($client);   
        //     $result = json_decode($response);
        //     echo  $result->name . " " . $result->price . " THB"; 
        // }
    ?>
    <?php
        // $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-all";
        // $response = file_get_contents($url);
        // $result = json_decode($response);

        // foreach ($result as $case) {
        //     echo "จำนวนผู้ติดเชื้อทั้งหมด : $case->total_case_excludeabroad ";    
        //     echo "จำนวนผู้เสียชีวิต : $case->new_death ";
        //     echo "<br>";            
        // }      
    ?>
    <?php
        $url = "http://10.0.15.20/lab8/restapis/superheroes";    
        $response = file_get_contents($url);
        $result = json_decode($response);
    
        echo "Squad Name : $result->squadName<br>";
        echo "Home Town : $result->homeTown<br>";    
        foreach ($result->members as $member) {  
            echo "name : $member->name ";
            echo "age : $member->age ";
            echo "secretIdentity : $member->secretIdentity <br>";
            echo "powers <ul>";
            foreach ($member->powers as $power){
                echo "<li> $power<br>";
            }
            echo "</ul><br>";
        }
    ?>
</body>
</html>