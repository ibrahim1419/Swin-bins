<?php  

    $output = fopen('fill.csv', 'w');

    fputcsv($output, array('id', 'day', 'date','fill'));
    $con = mysqli_connect('localhost', 'root', '', 'mibrathe_swin_bins');
    $rows = mysqli_query($con, "SELECT bin_id,DAYNAME(date), DATE_FORMAT(date, '%Y%m%d'), fill FROM predicted_data WHERE date <= (CURDATE() + INTERVAL 14 DAY)");

    while ($row = mysqli_fetch_assoc($rows)) {
      fputcsv($output, $row);
    }
    fclose($output);
    mysqli_close($con);
    exit();
  
?>