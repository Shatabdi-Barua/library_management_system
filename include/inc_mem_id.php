<?php
$ainc_sql = 'select serial from members order by serial desc limit 1';
$ainc_result = mysqli_query($conn, $ainc_sql);
$ainc_row = mysqli_fetch_array ($ainc_result);

$serial = $ainc_row['serial'] + 1;


?>