<?php require('connection/db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Bugs | BugTracker</title>
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
<header>
    <div id="logo"><a href="index.php"><img src="assets/images/logo.png" alt="Bug Tracker Logo" /></a></div>
    <div id="title">
        <h2>BugTracker</h2>
        <span>Keeping track of all the pesky little bugs</span><br>
        <span id="category"></span>
        <div id="current"></div>
    </div>
</header>
<main>
    <nav>
        <ul>
            <li><a href="showbugs.php">All Bug Items</a> </li>
            <li><a href="showbugs.php?cat=Android">Andrioid Bugs</a> </li>
            <li><a href="showbugs.php?cat=iOS">iOS Bugs</a> </li>
            <li><a href="showbugs.php?cat=Microsoft">Windows Bugs</a> </li>
            <li><a href="addbugs.php">Insert Bug</a> </li>
        </ul>
    </nav>
    <div id="right">
        <span id="notification"><?php if(isset($_GET['s'])){echo 'Bug Entry Successful!';}?></span>
        <?php
        if(isset($_GET['cat']) && $_GET['cat'] == 'Android'){
            $cat = 'Andriod';
            $sql = "SELECT * FROM bugs WHERE bugCategory ='Android'";
            $db_parse = mysqli_query($db, $sql);
            if(mysqli_num_rows($db_parse) >=1){
                while($row = $db_parse->fetch_array()){
                    echo "<section>";
                    echo "<h3>".$row['bugName']."</h3>";
                    echo "<h3>".$row['bugCategory']."</h3>";
                    echo "<p>".$row['bugSummary']."</p>";
                    echo "</section>";

                }
                echo "<script type='application/javascript'>";
                echo "document.getElementById('category').innerHTML = 'Android Bugs'";
                echo "</script>";

            }else{
                echo "No Result Found";
            }
        }else if(isset($_GET['cat']) && $_GET['cat'] == 'iOS'){
            $sql = "SELECT * FROM bugs WHERE bugCategory ='iOS'";
            $db_parse = mysqli_query($db, $sql);
            if(mysqli_num_rows($db_parse) >=1){
                while($row = $db_parse->fetch_array()){
                    echo "<section>";
                    echo "<h3>".$row['bugName']."</h3>";
                    echo "<h3>".$row['bugCategory']."</h3>";
                    echo "<p>".$row['bugSummary']."</p>";
                    echo "</section><hr>";
                }
                echo "<script type='application/javascript'>";
                echo "document.getElementById('category').innerHTML = 'iOS Bugs'";
                echo "</script>";

            }else{
                echo "No Result Found";
            }
        }else if(isset($_GET['cat']) && $_GET['cat'] == 'Microsoft'){

            $sql = "SELECT * FROM bugs WHERE bugCategory ='Microsoft'";
            $db_parse = mysqli_query($db, $sql);
            if(mysqli_num_rows($db_parse) >=1){
                while($row = $db_parse->fetch_array()){
                    echo "<section>";
                    echo "<h3>".$row['bugName']."</h3>";
                    echo "<h3>".$row['bugCategory']."</h3>";
                    echo "<p>".$row['bugSummary']."</p>";
                    echo "</section><hr>";
                }
                echo "<script type='application/javascript'>";
                echo "document.getElementById('category').innerHTML = 'Microsoft Bugs'";
                echo "</script>";

            }else{
                echo "No Result Found";
            }
        }else{
            $sql = "SELECT * FROM bugs";
            $db_parse = mysqli_query($db, $sql);
            if(mysqli_num_rows($db_parse) >=1){
                while($row = $db_parse->fetch_array()){
                    echo "<section>";
                    echo "<h3>".$row['bugName']."</h3>";
                    echo "<h3>".$row['bugCategory']."</h3>";
                    echo "<p>".$row['bugSummary']."</p>";
                    echo "</section><hr>";
                }
                echo "<script type='application/javascript'>";
                echo "document.getElementById('category').innerHTML = 'All Bugs'";
                echo "</script>";

            }else{
                echo "No Result Found";
            }

        }


        ?>
    </div>

</main>
<footer>
    <p>Designed by Ajibola Obayemi, 1311059</p>
</footer>

</body>
</html>