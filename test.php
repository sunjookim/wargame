<html>
<body>
<?php
$url = "http://localhost/flag.c";

$content = file_get_contents($url);

echo "<pre>" . htmlspecialchar($content) . "</pre>";
?>
</body>
</html>
