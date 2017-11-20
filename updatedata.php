<?php
    if (($handle = fopen("fill.csv", "r")) !== FALSE)
    {
        while (($data = fgetcsv($handle, ",")) !== FALSE)
        {
            $con = mysqli_connect('localhost', 'root', '', 'mibrathe_swin_bins');
            $rows = mysqli_query($con, "INSERT INTO predicted_data(bin_id, day, date, fill) VALUES ('{$data[1]}','{$data[2]}','{$data[3]}','{$data[4]}')");
        }
    echo "done";
    fclose($handle);
    }

?>
