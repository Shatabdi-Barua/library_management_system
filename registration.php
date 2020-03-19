<?php
    if(('' == $_GET['admin_name']));

   
		include('include/our_connect.php');
		include('include/inc_mem_id.php');
        $admin_name = $_GET['admin_name']; 
	
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		
		include('include/inc_mem_id.php');
		// $admin_name = 'Shatabdi';
		$entry_id = $serial;
		
		
		$name=$_POST['name'];
		
		$profession=$_POST['profession'];
		$mobile=$_POST['mobile'];
		
		
			$sql= "SELECT * FROM memebers WHERE serial='$entry_id'";
			$stid  = mysqli_query($conn, $sql);
      if (!$stid) die('stid');
			$info = mysqli_fetch_assoc($stid );

			
			if (0==mysqli_num_rows($stid)){

                           
				$inv_insert="INSERT INTO members VALUES ( '$entry_id' , '$name', '$profession', '$mobile')";
				 $inv_query = mysqli_query($conn, $inv_insert);
        if (!$inv_query) die(mysqli_error($conn));
				
				         
				
				header('Location: registration.php');
			} 
			
		else { 
           header('Location:unable.php');
             }
	} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add them all</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/all.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style type="text/css">
      fieldset {
        /*height: 500px;*/
        background-color: lavender;//#ffffe6;
      }
     
</style>
</head>
<body>
    
     <div class="container"> <br><br><br>
        <div class="row">
           <div class="col-sm-offset-1 col-sm-10">
              <form method="post" action="registration.php?admin_name=<?=$admin_name?>">
              <fieldset style="border: 2px solid skyblue">
                <legend class="in-middle txtdark"> Add New Member </legend>
                 <div class="row">
                  <div class="col-sm-offset-1 col-sm-10">
                    <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"> Entry no:</i></span>
                            <input class="form-control" type="text" name='entry_id' placeholder="ID" value="<?= $serial ?>" readonly>          
                        </div>

                    
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-cube"></i> Name</span>
                            <input class="form-control" type="text" name='name' placeholder="Name" required>          
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-shopping-bag"> profession</i></span>
                            <input class="form-control" type="text" name='profession' placeholder="profession" required>        
                        </div>
                  
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"> mobile</i></span>
                            <input class="form-control" type="text" name='mobile' placeholder="mobile" required> </div>

                       
                        
                <button class="btn btn-primary col-sm-offset-5 col-sm-2" type="submit"> Add </button> <br><br>
              </div>
              </fieldset>
            </form>
           </div> 
         
        </div>  
    </div>    
</body>
</html>