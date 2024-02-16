<?php
$url = base64_decode($_GET['url']);
header("Location: ".$url);
exit();
?>
