<!DOCTYPE html>
<?php 
     include('include/our_connect.php');
		$sql = 'SELECT *from books';
	
		$query = mysqli_query($conn, $sql);
		
		if (!$query){
			die('SQL error : '.mysqli_error($conn));
		}
	 ?>
<html>
<head>
	<title>Books</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/table.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

	<style type="text/css"></style>

</head>
<body>
	<div class="container container-fluid">
		
		<table class="table table-responsive data-table">
			<h1 class="txtgreen in-middle">All Books</h1><br>
			<thead>
				<tr>
				 
					<th>id</th>
					<th>book_name</th>
					<th>writer</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
					$no = 1;
					$total = 0;
					while ($row = mysqli_fetch_array($query)) {
						
				echo '<tr>
				
				<td>'.$row['id'].'</td>
				<td>'.$row['books_name'].'</td>
				<td>'.$row['writer'].'</td>
				 
					</tr>';
					
					$no++;
					}
				?>
			</tbody> 

			
		</table>
		
</body>
</html>