<?php
function viewPage($src, $values)
{
    require_once './view/public/header-footer/header.php';
    ($src == '404.php') ? require_once './view/public/' . $src : require_once './view/custom/' . $src;
    require_once './view/public/header-footer/footer.php';
}
