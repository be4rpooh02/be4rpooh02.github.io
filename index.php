<?php
$link = "https://www.bearpooh.com";

header ("HTTP/1.1 301 Moved Permanently");
#header ("Location: {$link}");
header("Refresh:3; url={$link}");
?>