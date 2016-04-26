<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Bugs | BugTracker</title>
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<header>
    <div id="logo"><a href="index.php"><img src="assets/images/logo.png" alt="Bug Tracker Logo" /></a></div>
    <div id="title">
        <h2>BugTracker</h2>
        <span>Keeping track of all the pesky little bugs</span>
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
    <section>
        <form action="process.php" method="post" name="bugform">
            <div>
                <label for="bugName">Bug Name</label>
                <input type="text" name="bugName" id="bugName" value="" required/>
            </div>
            <div>
                <label for="bugSummary">Bug Summary</label>
                <textarea name="bugSummary" id="bugSummary" rows="10" cols="10" required></textarea>
            </div>
            <div>
                <label for="bugCategory">Bug Category</label>
                <select name="bugCategory" id="bugCategory" required="required">
                    <option value="">Select Option</option>
                    <option value="Android">Android</option>
                    <option value="iOS">iOS</option>
                    <option value="Microsoft">Windows</option>
                </select>
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>

</main>
<footer>
    <p>Designed by Ajibola Obayemi <br><span>&copy; 2016</span></p>
</footer>

</body>
</html>