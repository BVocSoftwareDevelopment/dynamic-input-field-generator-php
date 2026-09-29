<?php
	
	function saveUser($mysqli, $person) {
		try {
			$stmt = $mysqli->prepare("INSERT INTO `person` (person_name) VALUES (?)");
			$stmt->bind_param("s", $person);
			$result = $stmt->execute();
			$stmt->close();
			return $result;
		} catch (mysqli_sql_exception $e) {
			error_log($e->getMessage(), 3, __DIR__ . '/../logs/errors.log');
			return false;
		}
	}
	
	
?>