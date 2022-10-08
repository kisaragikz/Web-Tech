<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Tech Lab8</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: hsl(214, 17%, 8%);
            height: 100%;
        }
        .container {
            background: #eee;
            border-radius: 10px;
            height: 95vh;
            width: 60vh;
        }
        .container div {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            /* width: 100%; */
        }
        img {
            width: 90%;
        }
        .underline {
            width:90%;
            text-align:center;
            margin-top: -20px;
        }
        .refresh:hover {
            cursor: pointer;
            opacity: 60%;
        }
        .refresh {
            width: 10%;
            transition: 0.2s linear;
        }
        button {
            font-size: 15px;
            width: 100px;
            height: 35px;
            border: 0px;
            background-color: hsl(263, 90%, 51%);
            color: #eee;
            border-radius: 5px;
            transition: 0.2s linear;
        }
        button:hover {
            cursor: pointer;
            opacity: 60%;
        }
        h2 {
            color: hsl(263, 90%, 51%);
        }
        p {
            margin-top: -10px;
            text-align: center;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-box-orient: vertical;   
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <?php
                $url = "https://www.themealdb.com/api/json/v1/1/random.php";
                $response = file_get_contents($url);
                $result = json_decode($response);
                $food = $result->meals[0];

                echo "
            <img src=\"$food->strMealThumb\">
        </div>
        <div>
            <h2>$food->strMeal</h2>
        </div>
        <div>
            <hr class=\"underline\">
        </div>
        <div>
            <p>$food->strInstructions</p>
        </div>
        <div class=\"button\">
            <a href=\"index.php\" class=\"refresh\">
                <img src=\"https://static.thenounproject.com/png/5651-200.png\">
            </a>
            <a href=\"$food->strSource\">
                <button>Learn More</button>
            </a>
        </div>
    </div>";
            ?>
        
</body>
</html>