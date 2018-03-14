
<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    try {
        $connection = new PDO('mysql:host=localhost;dbname=user','root');
    } catch (PDOException $exception) {
        echo 'Error';
    }
    $sql = "SELECT * FROM Intro";
    $statement = $connection->prepare($sql);
    if(!$statement->execute()){
        echo 'INSERT FAILED';
        return;
    }
    $returnedData = $statement->fetchAll();
    foreach ($returnedData as $key=>$value) {
        echo $value['id'] . ':' . $value['firstname'] . ':' . $value['lastname'] . ':' . $value['address'] .':' . $value['postcode'] . ':' . $value['city'] .':' . $value['email'] .':' . $value['telephone'] . ':' . $value['DOB'];
        echo '<br/>';
    }
}

//creating associative array
$aArrayofInfo = ['id'=>'007', 'firstname'=>'sandrine', lastname=>"Lara", address=>"", postcode=>"", city=>"", email=>"", telephone=>"", DOB=>""];
//iterating array to get keys and values
$infoMCard = '<ul>';
foreach ($aArrayofInfo as $key => $value){
    echo '<li>'.$key .'/'.$value . '</li>';
}
infoMCard .= '</ul>';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>My Information Card </title>
    </head>
    <body>
      <h1>Hello...</h1>
      <?php echo $infoMCard?>
    </body>
</html>     