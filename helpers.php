<?php

function instagramy_goodness_redirecturl(){
    $redirecturl = (isset($_SERVER["HTTPS"]) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . "/wp-admin/tools.php?page=instagramy_goodness";
    return $redirecturl;
}