<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	</head>
<body>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 bg-light p-4 rounded">
				<h3 class="text-primary">Dynamic Input Field Generator</h3>
				<hr style="border-top:1px dotted #ccc;"/>
				<form method="POST" action="submit.php">
					<h3>Form Field</h3>
					
					<div id="forms">
						<div class="d-flex">
							<input type="text" class="form-control" placeholder="Enter some text" name="person[]">
						</div>
					</div>
					<br />
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="button" class="btn btn-success" onclick="addField();">Add Field</button>
				</form>
			</div>
		</div>
		
	</div>
<script src="../assets/js/script.js"></script>	
</body>	
</html>