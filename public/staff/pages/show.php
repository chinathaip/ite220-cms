<?php
require_once("../../../private/initialize.php");
$pageId = $_GET['id'] ?? '1';

echo "pageId = " . cleanInput($pageId) . "<br>";
?>

<a class="actions" href="index.php">Go back</a>
