<?php
//header('Location:assign.php');
print_r($_POST);
try{
	include_once('connection.php');
	array_map("htmlspecialchars", $_POST);
 $stmt = $conn->prepare("INSERT INTO TblPupilStudies(SubjectID,UserID,Classposition,Classgradre,Exammark,Comment)VALUES (:subjects:,student,null,null,null,null)");
    $stmt->bindParam(':student', $_POST["student"]);
    $stmt->bindParam(':subjects', $_POST["subjects"]);
	$stmt->execute();
	}
catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
$conn=null;
?>
