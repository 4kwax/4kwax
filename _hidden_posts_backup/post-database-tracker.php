<?php
// This script tracks every IP that attempts to open these files.
$log = "thief_logs.txt";
$ip = $_SERVER['REMOTE_ADDR'];
file_put_contents($log, "Unauthorized Access from: " . $ip . "\n", FILE_APPEND);
echo "ACCESS DENIED: Your IP has been reported to Google Legal Team.";
?>
