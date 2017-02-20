<?php
$whitelist = array('127.0.0.1', "localhost");
if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    echo "local";
}else{
	echo "online";
}
?>