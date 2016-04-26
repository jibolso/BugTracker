<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 26/04/2016
 * Time: 01:40
 */

define("DBSERVER","ap-cdbr-azure-east-c.cloudapp.net");
define("DB_USERNAME", "b8da82cee82d74");
define("DB_PASSWORD", "244abf6c");
define("DB_DATABASE", "mybugtrackerapp");

$db = mysqli_connect(DBSERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

?>
