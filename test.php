<?php
$url = "http://localhost/flag.c";

$content = file_get_contents($url);

echo "<pre>" . htmlspecialchard($content) . "</pre>";`
?>
