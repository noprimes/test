<?php
header('Location: create_account.php');
try{

include_once('connection.php'); 

$stmt = $conn->prepare('SELECT * FROM users_tbl');
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row['FirstName'].' '.$row['LastName'].'<br>');
}


array_map('htmlspecialchars', $_POST);
switch($_POST['role'])
    {
	case 'Pupil':
		$role=0;
		break;
	case 'Teacher':
		$role=1;
		break;
	case 'Admin':
		$role=2;
		break;
    }

echo $_POST['FirstName'].'<br>';
echo $_POST['LastName'].'<br>';
echo $_POST['username'].'<br>';
echo $_POST['password'].'<br>';
echo $_POST['House'].'<br>';
echo $_POST['YearGroup'].'<br>';
echo $_POST['prefered_sandwich'].'<br>';
echo $_POST['prefered_crisp'].'<br>';
echo $_POST['prefered_drink'].'<br>';
echo $_POST['prefered_bar'].'<br>';
echo $_POST['prefered_fruit'].'<br>';
echo $_POST['role'].'<br>';

$stmt = $conn->prepare('INSERT INTO users_tbl (user_ID,FirstName,LastName,House,YearGroup,username,password,prefered_sandwich,prefered_crisp,prefered_drink,prefered_bar,prefered_fruit,role)
                                        VALUES (null,:FirstName,:LastName,:House,:YearGroup,:username,:password,:prefered_sandwich,:prefered_crisp,:prefered_drink,:prefered_bar,:prefered_fruit,:role)');

$stmt->bindParam(':FirstName', $_POST['FirstName']);
$stmt->bindParam(':LastName', $_POST['LastName']);
$stmt->bindParam(':House', $_POST['House']);
$stmt->bindParam(':YearGroup', $_POST['YearGroup']);
$stmt->bindParam(':username', $_POST['username']);
$stmt->bindParam(':password', $_POST['password']);
$stmt->bindParam(':prefered_sandwich', $_POST['prefered_sandwich']);
$stmt->bindParam(':prefered_crisp', $_POST['prefered_crisp']);
$stmt->bindParam(':prefered_drink', $_POST['prefered_drink']);
$stmt->bindParam(':prefered_bar', $_POST['prefered_bar']);
$stmt->bindParam(':prefered_fruit', $_POST['prefered_fruit']);
$stmt->bindParam(':role', $role);
$stmt->execute();
}catch(PDOException $e)
	{
		echo 'error'.$e->getMessage();
	}
$conn=null;
?>