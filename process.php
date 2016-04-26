<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 26/04/2016
 * Time: 02:58
 *
 *
 */


require('connection/db.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$bugName = test_input($_POST['bugName']);
$bugSummary = mysqli_real_escape_string($db, test_input($_POST['bugSummary']));
$bugCategory = test_input($_POST['bugCategory']);



$sql = "INSERT INTO bugs(bugName, bugSummary, bugCategory)
        VALUES ('{$bugName}', '{$bugSummary}', '{$bugCategory}')";

if (!$doQuery = mysqli_query($db, $sql)){
    echo 'Error:'. mysqli_error($db);
}else {
    header("Location:showbugs.php?s=1");
}



?>