<?php
ini_set('display_errors', 1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php
    $page_title = $page_title ?? 'Staff Area';
    echo "<title>" . $page_title . "</title>"; ?>
    <link rel="stylesheet" href=<?php echo url_for('/stylesheets/staff.css'); ?>>
</head>

<body>
<header>
    <h1>GBI Staff Area</h1>
</header>
