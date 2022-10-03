<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Tech Lab7</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        div {
            margin: 20px;
        }
        h3 {
            display: flex;
            justify-content: center;
        }
        label{
            font-weight: lighter;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_POST['name'])) {
            if (strlen($_POST['name']) >= 5) {
                $name = $_POST['name'];
            } else {
                $name = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
            }
        } else {
            $name = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
        }

        if (isset($_POST['address'])) {
            if (strlen($_POST['address']) >= 5) {
                $address = $_POST['address'];
            } else {
                $address = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
            }
        } else {
            $address = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
        }

        if (isset($_POST['profession'])) {
            if (strlen($_POST['profession']) >= 5) {
                $profession = $_POST['profession'];
            } else {
                $profession = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
            }
        } else {
            $profession = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
        }

        if (isset($_POST['age'])) {
            if ($_POST['age'] > 0) {
                $age = $_POST['age'];
            } else {
                $age = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
            }
        } else {
            $age = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
        }

        if (isset($_POST['residential'])) {
            $residential = $_POST['residential'];
            if($residential == "resident"){
                $resident = "Resident";
            }else{
                $resident = "Non-Resident";
            }
        } else {
            $resident = "<div style=\"display:inline-block;color:red;margin:0;\">***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</div>";
        }

        echo "<div>
        <div><h1 style=\"display:flex;justify-content:center;\">Your Infomation</h1></div>
        <div><h3>Name: <label>$name</label></h3></div>
        <div><h3>Address: <label>$address</label></h3></div>
        <div><h3>Age: <label>$age</label></h3></div>
        <div><h3>Profession: <label>$profession</label></h3></div>
        <div><h3>Residential Status: <label>$resident</label></h3></div>
        </div>";
    ?>
</body>
</html>