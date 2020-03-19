<?php
$ainc_sql = 'select id from books order by id desc limit 1';
$ainc_result = mysqli_query($conn, $ainc_sql);
$ainc_row = mysqli_fetch_array ($ainc_result);

$item_id = $ainc_row['id'] + 1;


?>