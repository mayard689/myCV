<?php
header('content-type: text/css');
ob_start('ob_gzhandler');
header('Cache-Control: max-age=31536000, must-revalidate');

echo ".portfolio .content {";
    echo "background:red;";
echo "}";



?>


#portfolio .content {
    background:red;
}