<?php
	require_once __DIR__ . '/../config/db.php';
	require_once __DIR__ . '/../includes/queries.php';
	
	$errors = [];
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		try{
			foreach($_POST['person'] as $id => $val){
				$person = $val;
				
				$success = saveUser($mysqli, $person);
				
				if(!$success){
					$errors[] = "Failed to save:" . htmlspecialchars($id);
				}
				
			}
			
		}catch(Exception $e){
			$errors[] = "System error:" . $e->getMessage();
		}
		
		
		if(empty($errors)){
			header("location: index.php");
			exit;
		}else{
			foreach($errors as $error){
				echo "<p style='color:red;'>Error: $error</p>";
			}
			
			echo "<a href='index.php'>Go back</a>";
		}
	}else{
		header("location: index.php");
		exit;
	}

?>