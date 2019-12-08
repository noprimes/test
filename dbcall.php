 <!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Show MySQL DB Data</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class='container'>
 
<table class='table table-striped'>
        <thead>
        <tr>
        <th>user_ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>House</th>
        <th>YearGroup</th>
        <th>username</th>
        <th>password</th>
        </tr>
        </thead>
 
 <?php
 	include_once('connection.php');
     $result = $conn->prepare('SELECT * FROM `users_tbl` u join orders_tbl o on o.user_ID=u.user_ID');
     $result->execute();

     while ($row = $result->fetch(PDO::FETCH_ASSOC))
     {
        echo '<tr>';
        echo '<td>' . $row['user_ID'] . '</td>';
        echo '<td>' . $row['FirstName'] . '</td>';
        echo '<td>' . $row['LastName'] . '</td>';
        echo '<td>' . $row['House'] . '</td>';
        echo '<td>' . $row['YearGroup'] . '</td>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['password'] . '</td>';
        echo '<td>' . $row['order_ID'] . '</td>';
        echo '<td>' . $row['date_ordered'] . '</td>';
        echo '<td>' . $row['date_required'] . '</td>';
        echo '<td>' . $row['collection_point'] . '</td>';
        echo '<td>' . $row['Sandwich'] . '</td>';
        echo '<td>' . $row['Drink'] . '</td>';
        echo '<td>' . $row['Crisp'] . '</td>';
        echo '<td>' . $row['Bar'] . '</td>';
        echo '<td>' . $row['Fruit'] . '</td>';
        echo '</tr>';
        }
;
      ?>
</table>

</div>
</body>
</html>