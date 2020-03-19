<?php
if(('' == $_GET['admin_name']));
$admin_name = $_GET['admin_name'];
$get_string = "?admin_name=$admin_name";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/all.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style type="text/css">
      .in-middle{
      display: block;
      margin-left: auto;
      margin-right: auto;
      text-align: center; }
      
</style>
</head>
<body>
	 
	<div class="container">
			<br><p class="in-middle txtdark font-spirax" style="font-size: 50px;"><b>All Menus</b></p>
		<br>
		<div class="row">
			<div class="col-sm-offset-1 col-sm-10">
				<div class="row">
					
					<div class="col-sm-6">
						<a href="show_all_books.php" class="btn btn-block box"><h2>Show all books</h2></a>
					</div>

					<div class="col-sm-6">
						<a href="add_book.php<?=$get_string?>" class="btn btn-block box"><h2>New Entry</h2></a>
					</div>

					
				</div> <br><br>
				

				<div class=row>

					<div class="col-sm-6">
						<a href="registration.php" class="btn box"><h2>registration</h2></a>
					</div>

	

					<div class="col-sm-6">
						<a href="searching.php" class="btn box"><h2>Searching</h2></a>
					</div>

				</div>
			
		</div>
	</div>
</body>
</html>