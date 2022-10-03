<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Tech Lab7</title>
    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
        b {
            font-size: 1.5em;
        }
        table {
            width: 5%;
        }
        table, td {
            border-bottom: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form id="calform" action="index.php" method="post">
        <label for="txt1">กรอกสูตรคูณ : </label>
        <input type="text" id="num1" name="num1" value="">
        <input type="submit" id="submit" value="แสดงตาราง">
    </form>
    <?php
        if (isset($_POST['num1'])) {
            $number = $_POST['num1'];
            $v = intval($number);
            echo "<p><b>ตารางสูตรคูณแม่ $v</b></p>";
            echo "<table>";
            for ($i = 1; $i <= 12; $i++) {
                echo "<tr><td>$v</td><td>x</td><td>$i</td><td>=</td><td>" . $v*$i . "</td></tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>