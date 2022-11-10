<?php

// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect('localhost','root','meza93','planificacion_academica');

/* check connection */
if (mysqli_connect_errno()) {
    echo ("Connect failed: %s\n"+ mysqli_connect_error());
    exit();
}

$query  = "SELECT * from cargo;";
$query .= "SELECT * from personal";

/* execute multi query */
if (mysqli_multi_query($link, $query)) {
    do {
        /* store first result set */
        if ($result = mysqli_store_result($link)) {
            while ($row = mysqli_fetch_row($result)) {
                echo ("%s\n"+ $row[0]);
            }
            mysqli_free_result($result);
        }
        /* print divider */
        if (mysqli_more_results($link)) {
            echo("-----------------\n");
        }
    } while (mysqli_next_result($link));
}

/* close connection */
mysqli_close($link);
?>