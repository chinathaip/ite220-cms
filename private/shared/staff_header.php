<?php
ini_set('display_errors', 1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php
    if (isset($page_title)) {
        echo "<title>" . $page_title . "</title>";
    } else {
        echo "<title>Staff Area</title>";
    }
    ?>
    <link rel="stylesheet" href=<?php echo url_for('/stylesheets/staff.css'); ?>>
</head>

<body>
<header>
    <h1>GBI Staff Area</h1>
</header>
<nav>
    <ul>
        <li><a href=<?php echo url_for("/staff/index.php"); ?>>Menu</a></li>
    </ul>
</nav>
