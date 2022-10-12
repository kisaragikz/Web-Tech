<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Web Tech Lab9</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <style>
      body {
         font-family: 'Josefin Sans', sans-serif;
      }
   </style>
</head>
<body>
   <?php
      class MyDB extends SQLite3 {
         function __construct() {
            $this->open('customers.db');
         }
      }
      $db = new MyDB();
      $sql ="SELECT * from CUSTOMERS";
      $ret = $db->query($sql);
      echo '<table class="table">
         <thead>
            <tr class="text-center h5">
               <th scope="col">ID</th>
               <th scope="col">Name</th>
               <th scope="col">Address</th>
               <th scope="col">Phone</th>
               <th scope="col">Email</th>
            </tr>
         </thead>
         <tbody>';
      while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
         echo '<tr>
            <td>'.$row['CustomerId'].'</td>
            <td>'.$row['FirstName'].' '.$row['LastName'].'</td>
            <td>'.$row['Address'].' '.$row['City'].' '.$row['State'].$row['Country'].' '.$row['PostalCode'].'</td>
            <td>'.$row['Phone'].' '.$row['Fax'].'</td>
            <td>'.$row['Email'].'</td>
         </tr>';
      }
      echo '</table>';
      if ($_GET) {
         $em_id = $db->querySingle("SELECT * FROM CUSTOMERS ORDER BY CustomerId DESC LIMIT 1;");
         $sql = "DELETE from CUSTOMERS where CustomerId = $em_id;";
         $ret = $db->exec($sql);
      }
      $db->close();
   ?>
   <form action="index.php" method="get">
      <input type="submit" name="insert" value="Delete last row"/>
   </form>
</body>
</html>
