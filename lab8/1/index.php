<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab8/1</title>
</head>

<body>
    <form action="index.php">
        <p>Currency Converter</p>
        <div>
            <label for="from">From : </label>
            <select name="from" id="from">
                <option>THB</option>
                <option>JPY</option>
                <option>CNY</option>
                <option>SGD</option>
                <option>USD</option>
            </select>
            <?php
                if(isset($_GET['button'])){
                    echo '<input type="number" name="from-amount" id="from-amount" value=' . $_GET["from-amount"] . ' />';
                }else{
                    echo('<input type="number" name="from-amount" id="from-amount" />');
                }
            ?>
            
        </div>
        <div>
            <label for="to">To : </label>
            <select name="to" id="to">
                <option>THB</option>
                <option>JPY</option>
                <option>CNY</option>
                <option>SGD</option>
                <option>USD</option>
            </select>
            <?php
            $url = "http://10.0.15.20/lab8/restapis/currencyrate";
            $response = file_get_contents($url);
            $result = json_decode($response, true);


            if (isset($_GET["button"])) {
                $from = $_GET["from"] ?: "THB";
                $from_amount = $_GET["from-amount"] ?: 0;
                $to = $_GET["to"] ?: "THB";
                $to_EUR = 0;

                if ($from === "THB") {
                    $to_EUR = $from_amount / $result["rates"]["THB"];
                } else if ($from === "JPY") {
                    $to_EUR = $from_amount / $result["rates"]["JPY"];
                } else if ($from === "CNY") {
                    $to_EUR = $from_amount / $result["rates"]["CNY"];
                } else if ($from === "SGD") {
                    $to_EUR = $from_amount / $result["rates"]["SGD"];
                } else { // USD
                    $to_EUR = $from_amount / $result["rates"]["USD"];
                }

                if ($to === "THB") {
                    $to_amount = $to_EUR * $result["rates"]["THB"];
                } else if ($to === "JPY") {
                    $to_amount = $to_EUR * $result["rates"]["JPY"];
                } else if ($to === "CNY") {
                    $to_amount = $to_EUR * $result["rates"]["CNY"];
                } else if ($to === "SGD") {
                    $to_amount = $to_EUR * $result["rates"]["SGD"];
                } else { // USD
                    $to_amount = $to_EUR * $result["rates"]["USD"];
                }

                echo ('<input type="number" name="to-amount" id="to-amount" value="' . number_format((float) $to_amount, 2) . '" />');
            } else {
                echo ('<input type="number" name="to-amount" id="to-amount" value="0" />');
            }
            ?>
        </div>

        <input type="button" name="button" value="Convert" />
    </form>
</body>

</html>