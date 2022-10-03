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
            min-height: 100vh;
        }

        table {
            border: 1px solid black;
            text-align: center;
            height: 100px;

        }

        table th,
        td {
            border: 1px solid black;
            font-size: 30px;
            padding: 10px;
        }

        .head {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
<div>
        <div class="head">
            <h1>APRIL 2022</h1>
        </div>
        <div>
            <table>
                <tr>
                    <th>Su</th>
                    <th>Mo</th>
                    <th>Tu</th>
                    <th>We</th>
                    <th>Th</th>
                    <th>Fr</th>
                    <th>Sa</th>
                </tr>
                <?php
                $k = -4;
                for ($i = 0; $i < 5; $i++) {
                    for ($j = 0; $j < 7; $j++) {
                        if ($k > 0 && $k <= 30) {
                            echo "<td>$k</td>";
                        } else {
                            echo "<td></td>";
                        }
                        $k++;
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>