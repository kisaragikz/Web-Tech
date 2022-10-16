<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Tech Lab9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .form {
            margin: 10px;
        }
        .form2 {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h2>Employee Form</h2>
        <form method="POST">
            <div class="form">
                <label class="form2" for="">ID : </label>
                <input  type="number" name="ID" style="width: 10%;">
            </div>
            <div class="form">
                <label class="form2" for="">Name : </label>
                <input  type="text" name="Name" style="width: 25%;">
            </div>
            <div class="form">
                <label class="form2" for="">Age : </label>
                <input  type="number" name="Age" style="width: 5%;">
            </div>
            <div class="form">
                <label class="form2" for="">Salary : </label>
                <input  type="number" name="Salary" style="width: 10%;">
            </div>
            <div class="form">
                <label class="form2" for="">Address : </label>
                <textarea name="Address" id="" rows="4" style="width: 20%;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
        <h2>List of Employees</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    class MyDB extends SQLite3{
                        function __construct(){
                            $this->open('company.db');
                        }
                    }
                    $db = new MyDB();
                    $sql =<<<EOF
                        CREATE TABLE COMPANY
                        (ID INT PRIMARY KEY     NOT NULL,
                        NAME           TEXT    NOT NULL,
                        AGE            INT     NOT NULL,
                        ADDRESS        CHAR(50),
                        SALARY         REAL);
                    EOF;

                    if (isset($_POST['ID'])) {
                        $id = $_POST['ID'];
                    }
                    if (isset($_POST['Name'])) {
                        $name = $_POST['Name'];
                    }
                    if (isset($_POST['Age'])) {
                        $age = $_POST['Age'];
                    }
                    if (isset($_POST['Salary'])) {
                        $salary = $_POST['Salary'];
                    }
                    if (isset($_POST['Address'])) {
                        $address = $_POST['Address'];
                        $sql =<<<EOF
                            INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
                            VALUES ($id, '$name', $age, '$address', $salary );
                        EOF;
                        $ret = $db->exec($sql);
                    }
                    $sql = "SELECT * from COMPANY";
                    $ret = $db->query($sql);
                    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                        echo "<tr>
                            <td>".$row['ID']."</td>
                            <td>".$row['NAME']."</td>
                            <td>".$row['AGE']."</td>
                            <td>".$row['ADDRESS']."</td>
                            <td>".$row['SALARY']."</td>
                        </tr>";
                    }
                    // $db->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>