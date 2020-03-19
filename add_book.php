<?php
    if(('' == $_GET['admin_name']));

    
    include('include/our_connect.php');
    include('include/inc_item_id.php');
       
    $admin_name = $_GET['admin_name'];
        
  if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
    include('include/inc_item_id.php');
    // $admin_name = 'Shatabdi';
    $id = $item_id;
    
    
    $books_name=$_POST['books_name'];
    
    $writer=$_POST['writer'];
    
    
      $sql= "SELECT * FROM books WHERE id='$id'";
      $stid  = mysqli_query($conn, $sql);
      if (!$stid) die('stid');
      $info = mysqli_fetch_assoc($stid );

     
      if (0==mysqli_num_rows($stid)){

                            // inserting into books table
        $inv_insert="INSERT INTO books VALUES ( '$id' , '$books_name', '$writer')";
         $inv_query = mysqli_query($conn, $inv_insert);
        if (!$inv_query) die(mysqli_error($conn));
        
                
        
        header('Location: show_all_books.php');
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
              <form method="post" action="add_book.php?admin_name=<?=$admin_name?>">
              <fieldset style="border: 2px solid skyblue">
                <legend class="in-middle txtdark"> Add New Items </legend>
                 <div class="row">
                  <div class="col-sm-offset-1 col-sm-10">
                    <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"> Entry no:</i></span>
                            <input class="form-control" type="text" name='entry_id' placeholder="ID" value="<?= $item_id ?>" readonly>          
                        </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-users"> Admin</i></span>
                        <input class="form-control" type="text" name='admin_name'  value="<?= $_GET['admin_name'] ?>" readonly> 
                    </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-cube"></i> BookName</span>
                            <input class="form-control" type="text" name='books_name' placeholder="Name" required>          
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-users"> writer</i></span>
                            <input class="form-control" type="text" name='writer' placeholder="writer name" required>        
                        </div>
                  
                      
                        
                <button class="btn btn-primary col-sm-offset-5 col-sm-2" type="submit"> Add </button> <br><br>
              </div>
              </fieldset>
            </form>
           </div> 
         
        </div>  
    </div>    
</body>
</html>