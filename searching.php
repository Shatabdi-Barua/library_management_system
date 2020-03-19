<!DOCTYPE html>

<?php 
    include('include/our_connect.php');
    $sql = 'SELECT * FROM books';
    //echo ''.$sql.'<br>';
    $query = mysqli_query($conn, $sql);
    
    if (!$query){
      die('SQL error : '.mysqli_error($conn));
    }
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['books_name'];
    $all = 'SELECT * from books where books_name = \''.$name.'\' ';
    $query = mysqli_query($conn, $all);

  }


   ?>
<html>
<head>
  <title>LIBRARY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/table.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<style>
</style>
  </head>
<body>
<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
    <li><a data-toggle="pill" href="#byquantity">By alphabet</a></li>
    <li><a data-toggle="pill" href="#bytp">By Writer</a></li>
    <!-- <li><a data-toggle="pill" href="#menu3">Menu 3</a></li> -->
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     
     <h3>Click any button above to view sorted list to search through</h3>
  
     <div class="row">
      <form action="searching.php" method="POST">
       <div class="col-sm-offset-3 col-sm-5">
    
      <div class="form-group input-group">
      <span class="input-group-addon"><i class="fa fa-cube"> book name</i></span>
      <input class="form-control" name="books_name" type="text">
    </div>
  </div>
  <button type="submit" class="btn btn-success bgc-dark">Search</button>
  </form>
</div>
  <?php if ($_SERVER["REQUEST_METHOD"]=="POST"): ?>
    <table class="table table-responsive data-table">
      <h1 class="txtgreen in-middle">Books</h1><br>
      <thead>
        <tr>
           
          <th>id</th>
          <th>books_name</th>
          <th>writer</th>
          
          
        </tr>
      </thead>
      <tbody>
        <?php
          $no = 1;
          $total = 0;
          while ($row = mysqli_fetch_array($query)) {
            //$amount = $row['amount'] == 0 ? '' : number_format($row['amount']);
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


  <?php endif; ?>



  </div>
</body>
</html> 