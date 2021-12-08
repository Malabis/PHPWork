<?php

show_source(__FILE__);
$covteam=$_GET['jijian'];
$file=$_GET['file'];
if (isset($covteam) && isset($file)) {
    $file=str_replace("file://", "", $file);
    include($file);
}else{
    echo "try aging";
}
?>
