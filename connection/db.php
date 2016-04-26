<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 26/04/2016
 * Time: 01:40
 */

define("DBSERVER","localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "bugtracker");

$db = mysqli_connect(DBSERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

?>