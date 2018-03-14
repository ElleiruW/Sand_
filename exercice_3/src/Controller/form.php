<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'] ?? null;
    $director = $_POST['director'] ?? null;
    $actors = $_POST['actors'] ?? null;
    $producer = $_POST['producer'] ?? null;
    $year_of_prod =$_POST['year_of_prod'] ?? null;
    $language = $_POST['language'] ?? null;
    $category = $_POST['category'] ?? null;
    $storyline = $_POST['storyline'] ?? null;
    $video = $_POST['video'] ?? null;
    
    
    echo 'Validate data' . "<br>";
    $titleSuccess = (is_string($title) && strlen($title) > 4);          // in order to check and update database the input needs to first be at least strictly superior to for in other words at least 5
    $directorSuccess = (is_string($director) && strlen($director) > 4);
    $actorsSuccess = (is_string($actors) && strlen($actors) > 4);
    $producerSuccess = (is_string($producer) && strlen($producer) > 4);
    $storylineSuccess = (is_string($storyline) && strlen($storyline) > 4);

    if ($titleSuccess && $directorsSuccess && $actorsSuccess && $producerSuccess && $storylineSuccess) {
        try {
            $connection = Service\DBConnector::getConnection();
        } catch (PDOException $exception) {
            http_response_code(500);
            echo 'A problem occured, contact support';
            exit(20);
        }
        echo 'Store data';
        return;
    }
}
 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Find your movie here here</title>
    </head>
    <style>
    
    .film_visual{
    color: grey;
    }
    div{
    color: red;
    }
    
    </style>
    <body>
    	<form class="film_visual" action="/form.php" method="POST">
    		<?php if (!($titleSuccess ?? true)) {?>
    		<div>
    			<p> You have an error in the title</p>
    		</div>
    		<?php }?>
    		<label for="title">Title of film :</label>
    		<input type="text" name="title" value="<?php echo htmlentities($title ?? '')?>"/>
    		
    		<br/>
    		
    		<?php if (!($directorSuccess ?? true)) {?>
    		<div>
    			<p> The director name is incomplete </p>
    		</div>
    		<?php }?>
    		<br/>
    		<label for="director">Name of Director :</label>
    		<input type="text" name="director" value="<?php echo htmlentities($director ?? '')?>"/>
    		
    		<?php if (!($actorsSuccess ?? true)) {?>
    		<div>
    			<p> The actors' name is incomplete </p>
    		</div>
    		<?php }?>
    		<br/>
    		<label for="actors">Name of actors :</label>
    		<input type="text" name="actors" value="<?php echo htmlentities($actors ?? '')?>"/>
    		
    		<?php if (!($producerSuccess ?? true)) {?>
    		<div>
    			<p> There is a mistake in the given name </p>
    		</div>
    		<?php }?>
    		<br/>
    		<label for="producer">Name of producer :</label>
    		<input type="text" name="producer" value="<?php echo htmlentities($producer ?? '')?>"/>
    		
    		<?php if (!($storylineSuccess ?? true)) {?>
    		<div>
    			<p> There is an error </p>
    		</div>
    		<?php }?>
    		<br/>
    		<label for="stroryline">Synopsis :</label>
    		<textarea name="storyline" value="<?php echo htmlentities($storyline ?? '')?>"/>
    		<br/>
    		<label> Year of Production : </label>
      		<select name="Year"> <!-- a list of choice for the user -->
           		 <option value="">----</option>
           		 <option value="year_of_production">1995</option>		<!-- SELECT function is required -->
            	<option value="application">application</option>
            	<option value="autre">autre</option>
     		 </select>
     		 <br/>
    		<label> Language: </label>
      		<select name="Language"> <!-- a list of choice for the user -->
            <option value="">----</option>
            <option value="french">french</option>
            <option value="german">german</option>
            <option value="luxembourgish">luxembourgish</option>
            <option value="spanish">spanish</option>
            <option value="english">english</option>
            <option value="other">other</option>
          	</select>
          	<br/>
          	<label> Category: </label>
      		<select name="Category"> <!-- a list of choice for the user -->
            <option value="">----</option>
            <option value="comedy">comedy</option>
            <option value="thriller">thriller</option>
            <option value="horror">horror</option>
            <option value="action">action</option>
            <option value="romance">romance</option>
            <option value="other">other</option>
          	</select>
          	
    		
    		<button type="reset">Reset</button>
    		<button type="submit">Send</button>
    	</form>
    </body>
</html>
