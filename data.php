<?php  

    $output = fopen('data.csv', 'w');

    fputcsv($output, array('id', 'day', 'date','fill'));
    $con = mysqli_connect('localhost', 'root', '', 'mibrathe_swin_bins');
    $rows = mysqli_query($con, "SELECT ID_bin,DAYNAME(date), DATE_FORMAT(date, '%Y%m%d'), fill FROM bins WHERE 1");

    while ($row = mysqli_fetch_assoc($rows)) {
      fputcsv($output, $row);
    }
    fclose($output);
    mysqli_close($con);
    exit();
  
?>