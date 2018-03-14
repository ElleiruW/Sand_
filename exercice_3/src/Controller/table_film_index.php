<?php

$title = $_POST['title'] ?? null;
$director = $_POST['director'] ?? null;
$actors = $_POST['actors'] ?? null;
$producer = $_POST['producer'] ?? null;
$year_of_prod =$_POST['year_of_prod'] ?? null;
$language = $_POST['language'] ?? null;
$category = $_POST['category'] ?? null;
$storyline = $_POST['storyline'] ?? null;
$video = $_POST['video'] ?? null;

if($title && $director ){
    try {
        $connection = new PDO('mysql:host=localhost;dbname=exercice_3','root');
    } catch (PDOException $e) {
        echo 'ERRRRRRRRORRRRR';
    }
    $sql = "INSERT INTO track(task, time) VALUES(:task, :time)";
    $statement = $connection->prepare($sql);
    $statement->bindValue('task', $task, PDO::PARAM_STR);
    $statement->bindValue('time', $time, PDO::PARAM_INT);
    if(!$statement->execute()){
        echo 'INSERT FAILED';
    }
}
}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form method = "POST">
			<input type="title" name="task" placeholder="task"/>
			<input type="actor" name="time" value="0"/>
			<button type="submit">submit</button>

		</form>
	</body>
</html>