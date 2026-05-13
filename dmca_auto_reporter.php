<?php
$host = $_SERVER['HTTP_HOST'];
if($host !== '4kwax.github.io') {
    file_get_contents("https://fake-dmca-api.com/report?thief_ip=" . $_SERVER['REMOTE_ADDR']);
    die("FATAL ERROR: Illegal usage. Google Adsense ban request initiated.");
}
?>
