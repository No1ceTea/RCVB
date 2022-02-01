<?php


function conversion($info){
    $info = trim($info);
    $info = htmlentities($info, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8", false);
    return $info;
}

?>